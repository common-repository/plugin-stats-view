const { registerBlockType } = wp.blocks;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { TextControl, RadioControl, ToggleControl, PanelBody, PanelRow } = wp.components;
const { serverSideRender: ServerSideRender } = wp;

registerBlockType(
	'plugin-stats-view/psview-block',
	{
		title: psview_text.single,
		icon: 'format-image',
		category: 'plugin-stats-view',

		edit ( props ) {
			return [
			<Fragment>
				<ServerSideRender
					block = 'plugin-stats-view/psview-block'
					attributes = { props.attributes }
				/>
				<TextControl
					label = { psview_text.slug }
					value = { props.attributes.slug }
					onChange = { ( value ) => props.setAttributes( { slug: value } ) }
				/>
				<RadioControl
					label = { psview_text.view }
					selected = { props.attributes.view }
					onChange = { ( value ) => props.setAttributes( { view: value } ) }
					options = { [
					{ label: psview_text.normal, value: 'normal' },
					{ label: psview_text.card, value: 'card' },
					{ label: psview_text.simple, value: 'simple' },
					] }
				/>

				<InspectorControls>
				{}
					<TextControl
						label = { psview_text.slug }
						value = { props.attributes.slug }
						onChange = { ( value ) => props.setAttributes( { slug: value } ) }
					/>
					<RadioControl
						label = { psview_text.view }
						selected = { props.attributes.view }
						onChange = { ( value ) => props.setAttributes( { view: value } ) }
						options = { [
						{ label: psview_text.normal, value: 'normal' },
						{ label: psview_text.card, value: 'card' },
						{ label: psview_text.simple, value: 'simple' },
						] }
					/>
					<PanelBody title = { psview_text.settings } initialOpen = { false }>
						<TextControl
							label = { psview_text.link }
							value = { props.attributes.link }
							onChange = { ( value ) => props.setAttributes( { link: value } ) }
						/>
						<ToggleControl
							label = { psview_text.open }
							checked = { props.attributes.open }
							onChange = { ( value ) => props.setAttributes( { open: value } ) }
						/>
					</PanelBody>
				</InspectorControls>
			</Fragment>
			];
		},

		save () {
			return null;
		},

	}
);
