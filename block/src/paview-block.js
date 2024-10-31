const { registerBlockType } = wp.blocks;
const { Fragment } = wp.element;
const { InspectorControls } = wp.blockEditor;
const { TextControl, PanelBody, PanelRow } = wp.components;
const { serverSideRender: ServerSideRender } = wp;

registerBlockType(
	'plugin-stats-view/paview-block',
	{
		title: paview_text.multi,
		icon: 'format-gallery',
		category: 'plugin-stats-view',

		edit ( props ) {
			return [
			<Fragment>
				<ServerSideRender
					block = 'plugin-stats-view/paview-block'
					attributes = { props.attributes }
				/>
				<TextControl
					label = { paview_text.slug }
					value = { props.attributes.slug }
					onChange = { ( value ) => props.setAttributes( { slug: value } ) }
				/>

				<InspectorControls>
				{}
					<TextControl
						label = { paview_text.slug }
						value = { props.attributes.slug }
						onChange = { ( value ) => props.setAttributes( { slug: value } ) }
					/>
					<PanelBody title = { paview_text.settings } initialOpen = { false }>
						<TextControl
							label = { paview_text.link }
							value = { props.attributes.link }
							onChange = { ( value ) => props.setAttributes( { link: value } ) }
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
