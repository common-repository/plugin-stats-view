import { __ } from '@wordpress/i18n';
import ServerSideRender from '@wordpress/server-side-render';
import { TextControl, ToggleControl, PanelBody, PanelRow } from '@wordpress/components';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';

export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();
	return (
		<div { ...blockProps }>
			<ServerSideRender
				block = 'plugin-stats-view/paview-block'
				attributes = { attributes }
			/>
			<TextControl
				label = { __( 'Slug', 'plugin-stats-view' ) }
				value = { attributes.slug }
				onChange = { ( value ) => setAttributes( { slug: value } ) }
			/>

			<InspectorControls>
				<TextControl
					label = { __( 'Slug', 'plugin-stats-view' ) }
					value = { attributes.slug }
					onChange = { ( value ) => setAttributes( { slug: value } ) }
				/>
				<PanelBody title = { __( 'Other settings', 'plugin-stats-view' ) } initialOpen = { false }>
					<TextControl
						label = { __( 'Link', 'plugin-stats-view' ) }
						value = { attributes.link }
						onChange = { ( value ) => setAttributes( { link: value } ) }
					/>
					<ToggleControl
						label = { __( 'Total only', 'plugin-stats-view' ) }
						checked = { attributes.totalonly }
						onChange = { ( value ) => setAttributes( { totalonly: value } ) }
					/>
				</PanelBody>
			</InspectorControls>
		</div>
	);
}
