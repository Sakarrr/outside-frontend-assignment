import { registerBlockType } from '@wordpress/blocks';
console.log("Outside Block");

registerBlockType('outside-block', {
    title: 'Outside Block',
    icon: 'smiley',
    category: 'common',
    edit: function() {
        console.log("Edit");
        return <div>Edit Mode: Basic Block</div>;
    },
    save: function() {
        console.log("Save");
        return <div>Save Mode: Basic Block</div>;
    },
});

setTimeout(function() {
    console.log("Block registered and functions defined.");
}, 0);