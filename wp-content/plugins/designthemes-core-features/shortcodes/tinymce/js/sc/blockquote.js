scnShortcodeMeta = {
	attributes : [
			{
				label : "Align",
				id : "align",
				help : "",
				controlType : "select-control",
				selectValues : [ '','left' ,'right' ,'center'],
				defaultValue : '',
				defaultText : 'Select'
			},

			{
				label : "Custom Text Color",
				id : "textcolor",
				help : 'Or you can also choose your own color to use as the text color',
				controlType : "color-control"
			},
			{
				label : 'Variation',
				id : 'variation',
				help : 'Choose one of our predefined color skins to use with your list.',
				controlType : "select-control",
				selectValues : [ '','green','brown','cyan','ferngreen','blue','ocean','purple','pink','red','grey','steel-blue','orange','yellow','aqua','turquoise','ruby','pearl','mustard','violet','teal','crimsonred','sandal','cream','lavender','palebrown'],
				defaultValue : '',
				defaultText : 'Select'
			},
			{
				label : "Cite Name",
				id : "cite",
				help : 'This is the name of the author. It will display at the end of the quote.',
				controlType : "text-control"
			}],
	defaultContent : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac luctus ligula. Phasellus a ligula blandit",
	shortcode : "dt_sc_blockquote"
};