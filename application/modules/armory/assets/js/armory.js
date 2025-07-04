// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
if (!window.WH) {
    window.WH = {};
    window.WH.debug = function (...args) {
        //console.log(args);
    };
    window.WH.defaultAnimation = `Stand`;
}

const CONTENT_PATH = 'https://wow.zamimg.com/modelviewer/classic/';

const NOT_DISPLAYED_SLOTS = [
    2, // neck
    11, // finger
    12, // trinket
    28 //libram
];

const RACES = {
    1: `human`,
    2: `orc`,
    3: `dwarf`,
    4: `nightelf`,
    5: `scourge`,
    6: `tauren`,
    7: `gnome`,
    8: `troll`,
    10: `bloodelf`,
    11: `draenei`
};

const CHARACTER_PART = {
    Face: `face`,
    "Skin Color": `skin`,
    "Hair Style": `hairStyle`,
    "Hair Color": `hairColor`,
    "Facial Hair": `facialStyle`,
    Mustache: `facialStyle`,
    Beard: `facialStyle`,
    Sideburns: `facialStyle`,
    "Face Shape": `facialStyle`,
    Eyebrow: `facialStyle`,
    "Jaw Features": undefined,
    "Face Features": undefined,
    "Skin Type": undefined,
    Ears: undefined,
    Horns: undefined,
    Blindfold: undefined,
    Tattoo: undefined,
    "Eye Color": undefined,
    "Tattoo Color": undefined,
    Armbands: undefined,
    "Jewelry Color": undefined,
    Bracelets: undefined,
    Necklace: undefined,
    Earring: undefined
};

if ($(window).width() < 480) {
    document.getElementById('patch').options[0].text = 'Choose Patch';
}

$('.tooltipLink').hover(function () {
    var title = $(this).attr('data-tooltip');
    $(this).data('tipText', title);
    if (title == '') {
    } else {
        $('<p class="patch-tooltip"></p>').fadeIn(200).text(title).appendTo('body');
    }
}, function () {
    $(this).attr('data-tooltip', $(this).data('tipText'));
    $('.patch-tooltip').fadeOut(200);
}).mousemove(function (e) {
    var mousex = e.pageX;
    var mousey = e.pageY;
    $('.patch-tooltip').css({
        top: mousey,
        left: mousex
    })
});

/**
 * Returns a 2 dimensional list the inner list contains on first position the item slot, the second the item
 * display-id ex: [[1,1170],[3,4925]]
 * @param {*[{item: {entry: number, displayid: number}, transmog: {entry: number, displayid: number}, slot: number}]} equipments
 * @returns {Promise<int[]>}
 */
async function findItemsInEquipments(equipments) {
    for (const equipment of equipments) {
        if (NOT_DISPLAYED_SLOTS.includes(equipment.slot)) {
            continue;
        }

        const displayedItem = equipment.item;
        const displaySlot = await getDisplaySlot(displayedItem.entry, equipment.slot, displayedItem.displayid);
        equipment.displaySlot = displaySlot.displaySlot;
        equipment.displayId = displaySlot.displayId;
        Object.assign(displaySlot, equipment);
    }
    return equipments
        .filter(e => e.displaySlot)
        .map(e => [e.displaySlot, e.displayId]);
}

/**
 *
 * @param {int} race
 * @param {int} gender
 * @returns {Promise<>}
 */
async function findRaceGenderOptions(race, gender) {
    const options = await fetch(`${CONTENT_PATH}meta/charactercustomization2/${race}_${gender}.json`).then((response) => response.json());
    if (options.data) {
        return options.data;
    }

    return options;
}

/**
 *
 * @param {int} item: Item id
 * @param {int} slot: Item slot number
 * @param {int} displayId: DisplayId of hte item
 * @return {Promise<boolean|*>}
 */
async function getDisplaySlot(item, slot, displayId) {
    try {
        await fetch(`${CONTENT_PATH}meta/armor/${slot}/${displayId}.json`).then(response => response.json());

        return {
            displaySlot: slot,
            displayId: displayId
        };
    } catch (e) {
        const resp = await fetch(baseURL + `/api/v1/item/newdisplayid/${item}`).then((response) => response.json());
        const res = resp.data ? resp.data : resp;
        if (res.ItemDisplayInfoID !== displayId) {
            return {
                displaySlot: slot,
                displayId: res.ItemDisplayInfoID
            };
        }
    }

    // old slots to new slots
    const retSlot = {
        5: 20, // chest
    } [slot];

    if (!retSlot) {
        console.warn(`Item: ${item} display: ${displayId} or slot: ${slot} not found for `);

        return {
            displaySlot: slot,
            displayId: displayId
        };
    }

    return {
        displaySlot: retSlot,
        displayId: displayId
    };
}

// eslint-disable-next-line no-undef
class WowModelViewer extends ZamModelViewer {
    getListAnimations() {
        return [...new Set(this.renderer.models[0].an.map(e => e.j))];
    }

    /**
     * Change character distance
     * @param {int} val
     */
    setDistance(val) {
        this.renderer.distance = val;
    }

    /**
     * Change the animation
     * @param {string} val
     */
    setAnimation(val) {
        if (!this.getListAnimations().includes(val)) {
            console.warn(`${this.constructor.name}: Animation ${val} not found`);
        }
        this.renderer.models[0].setAnimation(val);
    }

    /**
     * Play / Pause the animation
     * @param {boolean} val
     */
    setAnimPaused(val) {
        this.renderer.models[0].setAnimPaused(val);
    }
}

/**
 *
 * @param model: {{}|{{id, type}}}
 * @returns {Promise<{models: {id: string, type: number}, charCustomization: {options: []}, items: (*|*[])}|{models: {id, type}}>}
 */
async function optionsFromModel(model) {
    if (model.id && model.type) {
        // NPC or item
        const {
            id,
            type
        } = model;
        return {
            models: {
                id,
                type
            }
        };
    }

    const {
        race,
        gender
    } = model;

    // CHARACTER OPTIONS
    // This is how we describe a character properties
    const fullOptions = await findRaceGenderOptions(race, gender);

    // slot ids on model viewer
    const characterItems = (model.items) ? model.items.filter(e => !NOT_DISPLAYED_SLOTS.includes(e[0])) : [];
    const options = getOptions(model, fullOptions);

    const retGender = (gender === 1) ? `female` : `male`;
    const raceToModelId = RACES[race] + retGender;

    return {
        items: characterItems,
        charCustomization: {
            options: options
        },
        models: {
            id: raceToModelId,
            type: 16
        },
    };
}

/**
 *
 * @param {int} aspect: Size of the character
 * @param {string} containerSelector: jQuery selector on the container
 * @param {{}|{id: int, type: int}} model: A json representation of a character
 * @returns {Promise<WowModelViewer>}
 */
async function generateModels(aspect, containerSelector, model) {
    const modelOptions = await optionsFromModel(model);
    const models = {
        type: 2,
        contentPath: CONTENT_PATH, // eslint-disable-next-line no-undef
        container: jQuery(containerSelector),
        aspect: aspect,
        hd: true,
        ...modelOptions
    };
    window.models = models;

    // eslint-disable-next-line no-undef
    return new WowModelViewer(models);
}

function optionalChaining(choice) {
    //todo replace by `part.Choices[character[CHARACTER_PART[prop]]]?.Id` when it works on almost all frameworks
    return choice ? choice.Id : undefined;
}

/**
 *
 * @param character
 * @param {{}}fullOptions: Zaming API character options payload
 * @return {Promise<[]>}
 */
function getOptions(character, fullOptions) {
    const options = fullOptions.Options;
    const ret = [];
    for (const prop in CHARACTER_PART) {
        const part = options.find(e => e.Name === prop);

        if (!part) {
            continue;
        }

        const newOption = {
            optionId: part.Id,
            choiceId: (CHARACTER_PART[prop]) ? optionalChaining(part.Choices[character[CHARACTER_PART[prop]]]) : part.Choices[0].Id
        };
        ret.push(newOption);
    }

    return ret;
}

let buttonF = document.querySelector('#show3DModelFast');
let buttonD = document.querySelector('#show3DModelDetailed');
let placeholder = document.querySelector('#placeholder');

function removeButtons() {
    return new Promise(function (resolve) {
        buttonD.remove();
        buttonF.remove();
        $('#patch').hide();
        placeholder.classList.add("animate-flicker");
        resolve();
    });
}

function removePlaceholder() {
    return new Promise(function (resolve) {
        placeholder.remove();
        resolve();
    });
}

function showAnimationControl() {
    return new Promise(function (resolve) {
        setTimeout(function () {
            $.each(model.getListAnimations(), function (key, value) {
                $('#animationSelect')
                    .append($('<option>', {
                        value: value
                    })
                        .text(value));
            });

            setTimeout(() => {
                $("#patch").show();
            });
            $("div.animation-dropdown").show();

            $(document).on('click', '#playAnim', function (e) {
                $(this).hide();
                $("#pauseAnim").show();
                model.setAnimPaused(false);
            });

            $(document).on('click', '#pauseAnim', function (e) {
                $(this).hide();
                $("#playAnim").show();
                model.setAnimPaused(true);
            });
            resolve();
        }, 5000);
    });
}

async function show3DModel(type) {
    if (type == 1) {
        await removeButtons();
        window.model = await generateModels(1, `#model3D`, character);
        await removePlaceholder();
        await showAnimationControl();
    } else {
        findItemsInEquipments(equipments)
            .then(async e => {
                character.items = e;
                window.model = await generateModels(1, `#model3D`, character);
                await removePlaceholder();
                await showAnimationControl();
            });
        buttonD.remove();
        buttonF.remove();
        $('#patch').hide();
        placeholder.classList.add("animate-flicker");
    }
}

$("#show3DModelFast").bind('click', function () {
    show3DModel(1);
});
$("#show3DModelDetailed").bind('click', function () {
    show3DModel(2);
});

export {
    findRaceGenderOptions,
    generateModels,
    getDisplaySlot,
    findItemsInEquipments
};