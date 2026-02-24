@twillBlockTitle('Text With Image')
@twillBlockIcon('image-text')
@twillBlockGroup('app')

@php
$wysiwygOptions = [
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    'underline',
    'strike',
    'blockquote',
    'code-block',
    'ordered',
    'bullet',
    'hr',
    'code',
    'link',
    'clean',
    'table',
    'align',
];

$layoutOptions = [
    [
        'value' => 'left',
        'label' => 'Image Left'
    ],
    [
        'value' => 'right',
        'label' => 'Image Right'
    ],
];

$colourOptions = [
    [
        'value' => 'light',
        'label' => 'Light'
    ],
    [
        'value' => 'dark',
        'label' => 'Dark'
    ],
];
@endphp

<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>

<x-twill::wysiwyg
    name="text"
    label="Text"
    placeholder="Text"
    :toolbar-options="$wysiwygOptions"
    :translated="true"
/>

<x-twill::medias
    name="textWithImage"
    label="Image"
/>

<x-twill::radios
    name="layout"
    label="Layout"
    default="left"
    :inline="true"
    :options="$layoutOptions"
/>

<x-twill::radios
    name="colour"
    label="Colour"
    default="light"
    :inline="true"
    :options="$colourOptions"
/>