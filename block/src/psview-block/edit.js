import { __ } from '@wordpress/i18n';
import ServerSideRender from '@wordpress/server-side-render';
import { TextControl, RadioControl, ToggleControl, PanelBody, PanelRow } from '@wordpress/components';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';

export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();
	return (
		<div { ...blockProps }>
			<ServerSideRender
				block = 'plugin-stats-view/psview-block'
				attributes = { attributes }
			/>
			<TextControl
				label = { __( 'Slug', 'plugin-stats-view' ) }
				value = { attributes.slug }
				onChange = { ( value ) => setAttributes( { slug: value } ) }
			/>
			<RadioControl
				label = { __( 'View', 'plugin-stats-view' ) }
				selected = { attributes.view }
				onChange = { ( value ) => setAttributes( { view: value } ) }
				options = { [
					{ label: __( 'Normal display', 'plugin-stats-view' ), value: 'normal' },
					{ label: __( 'Card display', 'plugin-stats-view' ), value: 'card' },
					{ label: __( 'Simple display', 'plugin-stats-view' ), value: 'simple' },
				] }
			/>

			<InspectorControls>
				<TextControl
					label = { __( 'Slug', 'plugin-stats-view' ) }
					value = { attributes.slug }
					onChange = { ( value ) => setAttributes( { slug: value } ) }
				/>
				<RadioControl
					label = { __( 'View', 'plugin-stats-view' ) }
					selected = { attributes.view }
					onChange = { ( value ) => setAttributes( { view: value } ) }
					options = { [
						{ label: __( 'Normal display', 'plugin-stats-view' ), value: 'normal' },
						{ label: __( 'Card display', 'plugin-stats-view' ), value: 'card' },
						{ label: __( 'Simple display', 'plugin-stats-view' ), value: 'simple' },
					] }
				/>
				<PanelBody title = { __( 'Other settings', 'plugin-stats-view' ) } initialOpen = { false }>
					<TextControl
						label = { __( 'Link', 'plugin-stats-view' ) }
						value = { attributes.link }
						onChange = { ( value ) => setAttributes( { link: value } ) }
					/>
					<ToggleControl
						label = { __( 'View Description', 'plugin-stats-view' ) }
						checked = { attributes.open }
						onChange = { ( value ) => setAttributes( { open: value } ) }
					/>
				</PanelBody>
			</InspectorControls>
		</div>
	);
}
