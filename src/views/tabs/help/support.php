<?php

namespace TLA_Media\GTM_Kit;

use TLA_Media\GTM_Kit\Admin\OptionsForm;

/** @var OptionsForm $form */

if ( ! defined( 'GTMKIT_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}
?>
<h2 class="gtmkit-text-2xl gtmkit-font-bold gtmkit-text-color-heading gtmkit-mb-8">
	<?php esc_html_e( 'Get support', 'gtm-kit' ); ?>
</h2>

<div class="gtmkit-text-sm">

	<div class="gtmkit-my-6 gtmkit-border gtmkit-bg-white gtmkit-w-3/4 gtmkit-border-color-grey">
		<h3 class="gtmkit-font-bold gtmkit-text-lg gtmkit-px-3 gtmkit-py-2 gtmkit-border-b gtmkit-border-color-grey">
			<?php esc_html_e( 'Support options', 'gtm-kit' ); ?>
		</h3>
		<div class="gtmkit-p-3 gtmkit-space-y-1">
			<ul class="gtmkit-text-color-primary">
				<li><a href="https://wordpress.org/support/plugin/gtm-kit/" target="_blank"><?php esc_html_e( 'Support forum', 'gtm-kit' ); ?></a></li>
				<li><a href="https://github.com/tlamedia/gtm-kit" target="_blank"><?php esc_html_e( 'GITHub repository', 'gtm-kit' ); ?></a></li>
				<li><a href="https://gtmkit.com/" target="_blank"><?php esc_html_e( 'Plugin Homepage', 'gtm-kit' ); ?></a> (gtmkit.com)</li>
				<li><a href="https://wordpress.org/plugins/gtm-kit/" target="_blank"><?php esc_html_e( 'WordPress.org Plugin Page', 'gtm-kit' ); ?></a></li>
			</ul>
		</div>
	</div>

	<div class="gtmkit-mt-16 gtmkit-border gtmkit-bg-white gtmkit-w-3/4 gtmkit-border-color-grey">
		<h3 class="gtmkit-font-bold gtmkit-text-lg gtmkit-px-3 gtmkit-py-2 gtmkit-border-b gtmkit-border-color-grey gtmkit-flex gtmkit-items-center">
			<?php esc_html_e( 'About GTM Kit', 'gtm-kit' ); ?>
			<span class="gtmkit-text-sm gtmkit-text-color-grey gtmkit-font-light gtmkit-ml-2">(<?php esc_html_e( 'Version:', 'gtm-kit' ); ?> <?php echo esc_html( GTMKIT_VERSION ); ?>)</span>
		</h3>
		<div class="gtmkit-p-3">
			<p>
				<?php esc_html_e( 'The plugin is open source (GPL v3 license) and contributions are welcome:', 'gtm-kit' ); ?>
				<a class="gtmkit-text-color-primary" href="https://github.com/tlamedia/gtm-kit" target="_blank"><?php esc_attr_e( 'GTM Kit Repository', 'gtm-kit' ); ?></a>
			</p>
		</div>
	</div>

</div>