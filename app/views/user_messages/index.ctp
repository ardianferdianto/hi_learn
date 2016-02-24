<div id="email-template" class="clearfix">


	<div id="email-content" class="clearfix">

		<div style="float:left;width:300px;">
			<h2><?php __('EMAIL');?></h2>
			<h3 class="subemail">KOTAK MASUK</h3>
			<?php if ($groupAuth == 3):?>
			<img style="margin-top:60px;" src="<?php echo $this->webroot; ?>resources/images/email-siswa1.png" alt="icon">
			<?php else:?>
			<img style="margin-top:60px;" src="<?php echo $this->webroot; ?>resources/images/email-guru1.png" alt="icon">
			<?php endif;?>
			<h4 id="email-username"><?php echo $loggedInName;?></h4>
		</div>
		<div id="email-list" class="email-box" style="float:left;width:700px;margin-top:30px;position:relative;">
			<div class="email-header-box">
				<ul id="menu_list_email">
					<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>users/home"></a></li>
				</ul>
				<div class="clear"></div>
				<img style="margin:10px 0 0 20px;" src="<?php echo $this->webroot; ?>resources/images/email-ico1.png" alt="icon">
			</div>
			<div class="email-content-box clearfix">
				<div class="email-content-box-left">
					<a class="button-email" href="<?php echo $this->webroot; ?>user_messages/add">BUAT EMAIL BARU</a>
					<a class="button-email" href="<?php echo $this->webroot; ?>user_messages">KOTAK MASUK</a>
					<a class="button-email" href="<?php echo $this->webroot; ?>user_messages/sent">KOTAK KELUAR</a>
				</div>
				<div class="email-content-box-right">
					<table class="data display datatable " id="example">
							<thead>
								<tr>
								   <th style="font-weight: bold;
font-size: 12px;">DARI</th>
								   <th style="font-weight: bold;
font-size: 12px;">SUBJECT </th>
								   <th style="font-weight: bold;
font-size: 12px;">TANGGAL </th>
								</tr>

							</thead>

							<tfoot>
								<tr>
									<td colspan="6">

										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>

							<tbody>
							<?php
							$i = 0;
							foreach ($inbox as $userMessage):
								$class = null;
								if ($i++ % 2 == 0) {
									$class = ' class="altrow"';
								}
							?>
								<tr<?php echo $class;?>>

									<td>
										<?php
										if ($userMessage['SenderGuru'] != null){
										echo $userMessage['SenderGuru']['nama'];
										}else{
										echo $userMessage['SenderSiswa']['nama'];
										}
										?>
									</td>

									<td>
										<?php if ($userMessage['UserMessage']['read'] != 1):?>
										<?php echo $html->image('circle_blue.png');?>
										<a href="<?php echo $this->webroot; ?>user_messages/read/<?php echo $userMessage['UserMessage']['id']; ?>"><?php echo $userMessage['UserMessage']['subject']; ?></a>
										<?php else:?>
										<a href="<?php echo $this->webroot; ?>user_messages/view/<?php echo $userMessage['UserMessage']['id']; ?>"><?php echo $userMessage['UserMessage']['subject']; ?></a>
										<?php endif;?>
									</td>

									<td>
										<?php echo $userMessage['UserMessage']['created']; ?>
									</td>

									<!--<td class="actions">
										<?php if ($userMessage['UserMessage']['read'] == 1){
										echo $html->link(__('View', true), array('action' => 'view', $userMessage['UserMessage']['id']));

										 }else{
										  echo $html->link(__('View', true), array('action' => 'read', $userMessage['UserMessage']['id']));
										 }
										  ?>


									</td>-->
								</tr>
							<?php endforeach; ?>
							</tbody>
							</table>
				</div>
			</div>

			<!--<div class="content-box">
				<div class="content-box-header">

					<h3>Kotak Masuk</h3>

					<div class="clear"></div>

				</div>
				<div class="content-box-content">

					<div class="tab-content default-tab" id="tab1">

						<table>

							<thead>
								<tr>
									<th>Status</th>
								   <th>Dari</th>
								   <th>Tanggal </th>
								   <th>Action </th>
								</tr>

							</thead>

							<tfoot>
								<tr>
									<td colspan="6">

										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>

							<tbody>
							<?php
							$i = 0;
							foreach ($inbox as $userMessage):
								$class = null;
								if ($i++ % 2 == 0) {
									$class = ' class="altrow"';
								}
							?>
								<tr<?php echo $class;?>>
									<td>
										<?php $status = $userMessage['UserMessage']['read'];
										if($status == 1){
											echo $html->image("accept.gif");
										}else{

										}
										?>
									</td>
									<td>
										<?php
										if ($userMessage['SenderGuru'] != null){
										echo $userMessage['SenderGuru']['nama'];
										}else{
										echo $userMessage['SenderSiswa']['nama'];
										}
										?>
									</td>

									<td>
										<?php echo $userMessage['UserMessage']['created']; ?>
									</td>

									<td class="actions">
										<?php if ($userMessage['UserMessage']['read'] == 1){
										echo $html->link(__('View', true), array('action' => 'view', $userMessage['UserMessage']['id']));

										 }else{
										  echo $html->link(__('View', true), array('action' => 'read', $userMessage['UserMessage']['id']));
										 }
										  ?>


									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
							</table>

					</div>
				</div>
			</div>-->

			<!--<div class="clear"></div>
			<div class="content-box">
				<div class="content-box-header">

					<h3>Kotak Keluar</h3>

					<div class="clear"></div>

				</div>

				<div class="content-box-content">

					<div class="tab-content default-tab" id="tab1">

						<table>

							<thead>
								<tr>
									<th>Status</th>
								   <th>Untuk</th>
								   <th>Tanggal </th>
								   <th>Action </th>
								</tr>

							</thead>

							<tfoot>
								<tr>
									<td colspan="6">



										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>

							<tbody>
							<?php
							$i = 0;
							foreach ($sentitem as $userMessage):
								$class = null;

								if ($i++ % 2 == 0) {
									$class = ' class="altrow"';
								}
							?>
								<tr<?php echo $class;?>>
									<td>

										<?php $status = $userMessage['UserMessage']['sent'];
										if($status == 1){
											echo $html->image("accept.gif");
										}else{
											echo $html->image("stop.gif");
										}
										?>
									</td>
									<td>
										<?php
										if ($userMessage['ReceipentGuru'] != null){
										echo $userMessage['ReceipentGuru']['nama'];
										}else{
										echo $userMessage['ReceipentSiswa']['nama'];
										}
										?>
									</td>

									<td>
										<?php echo $userMessage['UserMessage']['created']; ?>
									</td>

									<td class="actions">
										<?php echo $html->link(__('View', true), array('action' => 'view', $userMessage['UserMessage']['id'])); ?>


									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
							</table>

					</div>
				</div>-->
			</div>
		</div>
	</div>

</div>


