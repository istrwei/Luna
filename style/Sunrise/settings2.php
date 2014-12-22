<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
    exit;

?>
</div>
<div class="jumbotron me-jumbotron">
	<div class="container">
        <div class="media">
            <a class="pull-left" href="#">
                <?php echo draw_user_avatar($luna_user['id'], 'avatar-me') ?>
            </a>
            <div class="media-body">
                <h2 class="media-heading"><?php echo $user['username']; ?></h2>
            </div>
        </div>
	</div>
</div>
<div class="container">
<div class="col-sm-3 profile-nav">
<?php
    load_me_nav('settings');
?>
</div>
<div class="col-sm-9">
<h2>Settings<span class="pull-right"><a class="btn btn-success"><span class="fa fa-check"></span> Save</a></h2>
<div role="tabpanel">
	<h3>Under construction</h3>
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
		<li role="presentation"><a href="#personalize" aria-controls="personalize" role="tab" data-toggle="tab">Personalize</a></li>
		<li role="presentation"><a href="#email" aria-controls="email" role="tab" data-toggle="tab">Email</a></li>
		<li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a></li>
		<li role="presentation"><a href="#threads" aria-controls="threads" role="tab" data-toggle="tab">Threads</a></li>
		<li role="presentation"><a href="#time" aria-controls="time" role="tab" data-toggle="tab">Time</a></li>
		<li role="presentation"><a href="#admin" aria-controls="admin" role="tab" data-toggle="tab">Admin</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="profile">
			<fieldset class="form-horizontal form-setting">
                <input type="hidden" name="form_sent" value="1" />
                <div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Username']?></label>
					<div class="col-sm-9">
						<?php echo $username_field ?>
					</div>
				</div>
                <?php if ($luna_user['id'] == $id || $luna_user['g_id'] == FORUM_ADMIN || ($user['g_moderator'] == '0' && $luna_user['g_mod_change_passwords'] == '1')): ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Password'] ?></label>
                    <div class="col-sm-9">
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#newpass"><?php echo $lang['Change pass'] ?></a>
                    </div>
                </div>
                <?php endif; ?>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Email'] ?></label>
					<div class="col-sm-9">
						<div class="input-group">
							<?php echo $email_field ?>
							<?php echo $email_button ?>
						</div>
					</div>
				</div>
                <hr />
                <input type="hidden" name="form_sent" value="1" />
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Realname'] ?></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="form[realname]" value="<?php echo luna_htmlspecialchars($user['realname']) ?>" maxlength="40" />
                    </div>
                </div>
                <?php if (isset($title_field)): ?>
                    <?php echo $title_field ?>
                <?php endif; ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Location'] ?></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="form[location]" value="<?php echo luna_htmlspecialchars($user['location']) ?>" maxlength="30" />
                    </div>
                </div>
				<hr />
				<div class="form-group">
					<label class="col-sm-3 control-label">Avatar<span class="help-block"><?php echo $lang['Avatar info'] ?></span></label>
					<div class="col-sm-9">
						<img src="img/avatars/placeholder.png" class="img-responsive visible-lg-inline" />
						<a href="#" class="btn btn-default">Upload</a>
					</div>
				</div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Signature<span class="help-block"><?php echo $lang['Signature info'] ?></span></label>
                    <div class="col-sm-9">
						<textarea class="form-control" name="signature" rows="4"><?php echo luna_htmlspecialchars($user['signature']) ?></textarea>
						<span class="help-block"><?php printf($lang['Sig max size'], forum_number_format($luna_config['p_sig_length']), $luna_config['p_sig_lines']) ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Sig preview'] ?></label>
                    <div class="col-sm-9">
						<div class="well">
							No signature set
						</div>
                    </div>
                </div>
			</fieldset>
		</div>
		<div role="tabpanel" class="tab-pane" id="personalize">
			<fieldset class="form-horizontal form-setting">
				<div class="form-group">
					<label class="col-sm-3 control-label">Profile color</label>
					<div class="col-sm-9">
						<div class="btn-group accent-group" data-toggle="buttons">
							<label class="btn btn-primary color-accent accent-blue<?php if ($luna_user['color'] == '#14a3ff') echo ' active' ?>">
								<input type="radio" name="form[color]" id="blue" value="#14a3ff"<?php if ($luna_user['color'] == '#14a3ff') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-denim<?php if ($luna_user['color'] == '#2788cb') echo ' active' ?>">
								<input type="radio" name="form[color]" id="denim" value="#2788cb"<?php if ($luna_user['color'] == '#2788cb') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-luna<?php if ($luna_user['color'] == '#0d4382') echo ' active' ?>">
								<input type="radio" name="form[color]" id="luna" value="#0d4382"<?php if ($luna_user['color'] == '#0d4382') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-purple<?php if ($luna_user['color'] == '#c58be2') echo ' active' ?>">
								<input type="radio" name="form[color]" id="purple" value="#c58be2"<?php if ($luna_user['color'] == '#c58be2') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-green<?php if ($luna_user['color'] == '#99cc00') echo ' active' ?>">
								<input type="radio" name="form[color]" id="green" value="#99cc00"<?php if ($luna_user['color'] == '#99cc00') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-ao<?php if ($luna_user['color'] == '#047a36') echo ' active' ?>">
								<input type="radio" name="form[color]" id="ao" value="#047a36"<?php if ($luna_user['color'] == '#047a36') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-yellow<?php if ($luna_user['color'] == '#ffcd21') echo ' active' ?>">
								<input type="radio" name="form[color]" id="yellow" value="#ffcd21"<?php if ($luna_user['color'] == '#ffcd21') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-orange<?php if ($luna_user['color'] == '#ff7521') echo ' active' ?>">
								<input type="radio" name="form[color]" id="orange" value="#ff7521"<?php if ($luna_user['color'] == '#ff7521') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-red<?php if ($luna_user['color'] == '#ff4444') echo ' active' ?>">
								<input type="radio" name="form[color]" id="red" value="#ff4444"<?php if ($luna_user['color'] == '#ff4444') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-white<?php if ($luna_user['color'] == '#cccccc') echo ' active' ?>">
								<input type="radio" name="form[color]" id="white" value="#cccccc"<?php if ($luna_user['color'] == '#cccccc') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-grey<?php if ($luna_user['color'] == '#999999') echo ' active' ?>">
								<input type="radio" name="form[color]" id="grey" value="#999999"<?php if ($luna_user['color'] == '#999999') echo ' checked' ?>>
							</label>
							<label class="btn btn-primary color-accent accent-black<?php if ($luna_user['color'] == '#444444') echo ' active' ?>">
								<input type="radio" name="form[color]" id="black" value="#444444"<?php if ($luna_user['color'] == '#444444') echo ' checked' ?>>
							</label>
						</div>
                    </div>
                </div>
			</fieldset>
		</div>
		<div role="tabpanel" class="tab-pane" id="email">
			<fieldset class="form-horizontal form-setting">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Email setting info'] ?></label>
                    <div class="col-sm-9">
                        <div class="radio">
                            <label>
                                <input type="radio" name="form[email_setting]" value="0"<?php if ($user['email_setting'] == '0') echo ' checked="checked"' ?> />
                                <?php echo $lang['Email setting 1'] ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="form[email_setting]" value="1"<?php if ($user['email_setting'] == '1') echo ' checked="checked"' ?> />
                                <?php echo $lang['Email setting 2'] ?>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="form[email_setting]" value="2"<?php if ($user['email_setting'] == '2') echo ' checked="checked"' ?> />
                                <?php echo $lang['Email setting 3'] ?>
                            </label>
                        </div>
                    </div>
                </div>
				<hr />
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Subscriptions head'] ?></label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="form[notify_with_post]" value="1"<?php if ($user['notify_with_post'] == '1') echo ' checked="checked"' ?> />
                                <?php echo $lang['Notify full'] ?>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="form[auto_notify]" value="1"<?php if ($user['auto_notify'] == '1') echo ' checked="checked"' ?> />
                                <?php echo $lang['Auto notify full'] ?>
                            </label>
                        </div>
                    </div>
                </div>
			</fieldset>
		</div>
		<div role="tabpanel" class="tab-pane" id="contact">
			<fieldset class="form-horizontal form-setting">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Website'] ?></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="form[url]" value="<?php echo luna_htmlspecialchars($user['url']) ?>" maxlength="80" />
                    </div>
                </div>
                <hr />
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Microsoft'] ?></label>
                    <div class="col-sm-9">
                        <input id="microsoft" type="text" class="form-control" name="form[msn]" value="<?php echo luna_htmlspecialchars($user['msn']) ?>" maxlength="50" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Facebook'] ?></label>
                    <div class="col-sm-9">
                        <input id="facebook" type="text" class="form-control" name="form[facebook]" value="<?php echo luna_htmlspecialchars($user['facebook']) ?>" maxlength="50" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Twitter'] ?></label>
                    <div class="col-sm-9">
                        <input id="twitter" type="text" class="form-control" name="form[twitter]" value="<?php echo luna_htmlspecialchars($user['twitter']) ?>" maxlength="50" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Google+'] ?></label>
                    <div class="col-sm-9">
                        <input id="google" type="text" class="form-control" name="form[google]" value="<?php echo luna_htmlspecialchars($user['google']) ?>" maxlength="50" />
                    </div>
                </div>
			</fieldset>
		</div>
		<div role="tabpanel" class="tab-pane" id="threads">
			<fieldset class="form-horizontal form-setting">
<?php if ($luna_config['o_smilies'] == '1' || $luna_config['o_smilies_sig'] == '1' || $luna_config['o_signatures'] == '1' || $luna_config['o_avatars'] == '1' || $luna_config['p_message_img_tag'] == '1'): ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Post display'] ?></label>
                    <div class="col-sm-9">
<?php if ($luna_config['o_smilies'] == '1' || $luna_config['o_smilies_sig'] == '1'): ?>
                        <div class="checkbox">
                            <label>
                                <input disabled type="checkbox" name="form[show_smilies]" value="1"<?php if ($user['show_smilies'] == '1') echo ' checked="checked"' ?> />
                                <?php echo $lang['Show smilies'] ?>
                            </label>
                        </div>
<?php endif; if ($luna_config['o_signatures'] == '1'): ?>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="form[show_sig]" value="1"<?php if ($user['show_sig'] == '1') echo ' checked="checked"' ?> />
                                <?php echo $lang['Show sigs'] ?>
                            </label>
                        </div>
<?php endif; if ($luna_config['o_avatars'] == '1'): ?>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="form[show_avatars]" value="1"<?php if ($user['show_avatars'] == '1') echo ' checked="checked"' ?> />
                                <?php echo $lang['Show avatars'] ?>
                            </label>
                        </div>
<?php endif; if ($luna_config['p_message_img_tag'] == '1'): ?>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="form[show_img]" value="1"<?php if ($user['show_img'] == '1') echo ' checked="checked"' ?> />
                                <?php echo $lang['Show images'] ?>
                            </label>
                        </div>
<?php endif; if ($luna_config['o_signatures'] == '1' && $luna_config['p_sig_img_tag'] == '1'): ?>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="form[show_img_sig]" value="1"<?php if ($user['show_img_sig'] == '1') echo ' checked="checked"' ?> />
                                <?php echo $lang['Show images sigs'] ?>
                            </label>
                        </div>
<?php endif; ?>
                    </div>
                </div>
<?php endif; ?>
                <hr />
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Topics per page'] ?></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="form[disp_topics]" value="<?php echo $user['disp_topics'] ?>" maxlength="3" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Posts per page'] ?></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="form[disp_posts]" value="<?php echo $user['disp_posts'] ?>" maxlength="3" />
                    </div>
                </div>
			</fieldset>
		</div>
		<div role="tabpanel" class="tab-pane" id="time">
			<fieldset class="form-horizontal form-setting">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Time zone'] ?></label>
                    <div class="col-sm-9">
                        <select class="form-control" name="form[timezone]">
                            <option value="-12"<?php if ($user['timezone'] == -12) echo ' selected="selected"' ?>><?php echo $lang['UTC-12:00'] ?></option>
                            <option value="-11"<?php if ($user['timezone'] == -11) echo ' selected="selected"' ?>><?php echo $lang['UTC-11:00'] ?></option>
                            <option value="-10"<?php if ($user['timezone'] == -10) echo ' selected="selected"' ?>><?php echo $lang['UTC-10:00'] ?></option>
                            <option value="-9.5"<?php if ($user['timezone'] == -9.5) echo ' selected="selected"' ?>><?php echo $lang['UTC-09:30'] ?></option>
                            <option value="-9"<?php if ($user['timezone'] == -9) echo ' selected="selected"' ?>><?php echo $lang['UTC-09:00'] ?></option>
                            <option value="-8.5"<?php if ($user['timezone'] == -8.5) echo ' selected="selected"' ?>><?php echo $lang['UTC-08:30'] ?></option>
                            <option value="-8"<?php if ($user['timezone'] == -8) echo ' selected="selected"' ?>><?php echo $lang['UTC-08:00'] ?></option>
                            <option value="-7"<?php if ($user['timezone'] == -7) echo ' selected="selected"' ?>><?php echo $lang['UTC-07:00'] ?></option>
                            <option value="-6"<?php if ($user['timezone'] == -6) echo ' selected="selected"' ?>><?php echo $lang['UTC-06:00'] ?></option>
                            <option value="-5"<?php if ($user['timezone'] == -5) echo ' selected="selected"' ?>><?php echo $lang['UTC-05:00'] ?></option>
                            <option value="-4"<?php if ($user['timezone'] == -4) echo ' selected="selected"' ?>><?php echo $lang['UTC-04:00'] ?></option>
                            <option value="-3.5"<?php if ($user['timezone'] == -3.5) echo ' selected="selected"' ?>><?php echo $lang['UTC-03:30'] ?></option>
                            <option value="-3"<?php if ($user['timezone'] == -3) echo ' selected="selected"' ?>><?php echo $lang['UTC-03:00'] ?></option>
                            <option value="-2"<?php if ($user['timezone'] == -2) echo ' selected="selected"' ?>><?php echo $lang['UTC-02:00'] ?></option>
                            <option value="-1"<?php if ($user['timezone'] == -1) echo ' selected="selected"' ?>><?php echo $lang['UTC-01:00'] ?></option>
                            <option value="0"<?php if ($user['timezone'] == 0) echo ' selected="selected"' ?>><?php echo $lang['UTC'] ?></option>
                            <option value="1"<?php if ($user['timezone'] == 1) echo ' selected="selected"' ?>><?php echo $lang['UTC+01:00'] ?></option>
                            <option value="2"<?php if ($user['timezone'] == 2) echo ' selected="selected"' ?>><?php echo $lang['UTC+02:00'] ?></option>
                            <option value="3"<?php if ($user['timezone'] == 3) echo ' selected="selected"' ?>><?php echo $lang['UTC+03:00'] ?></option>
                            <option value="3.5"<?php if ($user['timezone'] == 3.5) echo ' selected="selected"' ?>><?php echo $lang['UTC+03:30'] ?></option>
                            <option value="4"<?php if ($user['timezone'] == 4) echo ' selected="selected"' ?>><?php echo $lang['UTC+04:00'] ?></option>
                            <option value="4.5"<?php if ($user['timezone'] == 4.5) echo ' selected="selected"' ?>><?php echo $lang['UTC+04:30'] ?></option>
                            <option value="5"<?php if ($user['timezone'] == 5) echo ' selected="selected"' ?>><?php echo $lang['UTC+05:00'] ?></option>
                            <option value="5.5"<?php if ($user['timezone'] == 5.5) echo ' selected="selected"' ?>><?php echo $lang['UTC+05:30'] ?></option>
                            <option value="5.75"<?php if ($user['timezone'] == 5.75) echo ' selected="selected"' ?>><?php echo $lang['UTC+05:45'] ?></option>
                            <option value="6"<?php if ($user['timezone'] == 6) echo ' selected="selected"' ?>><?php echo $lang['UTC+06:00'] ?></option>
                            <option value="6.5"<?php if ($user['timezone'] == 6.5) echo ' selected="selected"' ?>><?php echo $lang['UTC+06:30'] ?></option>
                            <option value="7"<?php if ($user['timezone'] == 7) echo ' selected="selected"' ?>><?php echo $lang['UTC+07:00'] ?></option>
                            <option value="8"<?php if ($user['timezone'] == 8) echo ' selected="selected"' ?>><?php echo $lang['UTC+08:00'] ?></option>
                            <option value="8.75"<?php if ($user['timezone'] == 8.75) echo ' selected="selected"' ?>><?php echo $lang['UTC+08:45'] ?></option>
                            <option value="9"<?php if ($user['timezone'] == 9) echo ' selected="selected"' ?>><?php echo $lang['UTC+09:00'] ?></option>
                            <option value="9.5"<?php if ($user['timezone'] == 9.5) echo ' selected="selected"' ?>><?php echo $lang['UTC+09:30'] ?></option>
                            <option value="10"<?php if ($user['timezone'] == 10) echo ' selected="selected"' ?>><?php echo $lang['UTC+10:00'] ?></option>
                            <option value="10.5"<?php if ($user['timezone'] == 10.5) echo ' selected="selected"' ?>><?php echo $lang['UTC+10:30'] ?></option>
                            <option value="11"<?php if ($user['timezone'] == 11) echo ' selected="selected"' ?>><?php echo $lang['UTC+11:00'] ?></option>
                            <option value="11.5"<?php if ($user['timezone'] == 11.5) echo ' selected="selected"' ?>><?php echo $lang['UTC+11:30'] ?></option>
                            <option value="12"<?php if ($user['timezone'] == 12) echo ' selected="selected"' ?>><?php echo $lang['UTC+12:00'] ?></option>
                            <option value="12.75"<?php if ($user['timezone'] == 12.75) echo ' selected="selected"' ?>><?php echo $lang['UTC+12:45'] ?></option>
                            <option value="13"<?php if ($user['timezone'] == 13) echo ' selected="selected"' ?>><?php echo $lang['UTC+13:00'] ?></option>
                            <option value="14"<?php if ($user['timezone'] == 14) echo ' selected="selected"' ?>><?php echo $lang['UTC+14:00'] ?></option>
                        </select>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="form[dst]" value="1"<?php if ($user['dst'] == '1') echo ' checked="checked"' ?> />
                                <?php echo $lang['DST'] ?>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Time format'] ?></label>
                    <div class="col-sm-9">
                        <select class="form-control" name="form[time_format]">
<?php
                    foreach (array_unique($forum_time_formats) as $key => $time_format) {
                        echo "\t\t\t\t\t\t\t\t".'<option value="'.$key.'"';
                        if ($user['time_format'] == $key)
                            echo ' selected="selected"';
                        echo '>'. format_time(time(), false, null, $time_format, true, true);
                        if ($key == 0)
                            echo ' ('.$lang['Default'].')';
                        echo "</option>\n";
                    }
?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $lang['Date format'] ?></label>
                    <div class="col-sm-9">
                        <select class="form-control" name="form[date_format]">
<?php
                    foreach (array_unique($forum_date_formats) as $key => $date_format) {
                        echo "\t\t\t\t\t\t\t\t".'<option value="'.$key.'"';
                        if ($user['date_format'] == $key)
                            echo ' selected="selected"';
                        echo '>'. format_time(time(), true, $date_format, null, false, true);
                        if ($key == 0)
                            echo ' ('.$lang['Default'].')';
                        echo "</option>\n";
                    }
?>
                        </select>
                    </div>
                </div>
			</fieldset>
		</div>
		<div role="tabpanel" class="tab-pane" id="admin">
			<h3>Under construction</h3>
		</div>
	</div>
</div>
</div>