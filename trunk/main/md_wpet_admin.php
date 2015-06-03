<?php
global $MD_WPET_settings; // we'll need this below
?>
<div class="wrap">
    <h2>Awesome Plugin</h2>

    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
    	<?php $MD_WPET_settings->the_nonce(); ?>
    	<table class="form-table">
			<tbody>
				<tr>
					<th scope="row" valign="top">Шапка писем</th>
					<td>
                        <?php wp_editor(
                                $MD_WPET_settings->get_setting('template_header'),
                                $MD_WPET_settings->get_field_name('template_header'),
                                $settings = array(
                                    'wpautop' => false,
                                    'textarea_rows' => 10
                                )
                            );
                        ?>
					</td>
				</tr>
				<tr>
					<th scope="row" valign="top">Подвал писем</th>
					<td>
                        <?php wp_editor(
                                $MD_WPET_settings->get_setting('template_footer'),
                                $MD_WPET_settings->get_field_name('template_footer'),
                                $settings = array(
                                    'wpautop' => false,
                                    'textarea_rows' => 10
                                )
                            );
                        ?>
					</td>
				</tr>
				<tr>
					<th scope="row" valign="top">От кого</th>
					<td>
						<label>
							<input type="text" name="<?=$MD_WPET_settings->get_field_name('from_email');?>" value="<?=$MD_WPET_settings->get_setting('from_email');?>" />
						</label>
					</td>
				</tr>
			</tbody>
    	</table>
    	<input class="button-primary" type="submit" value="Save Settings" />
    </form>
</div>
