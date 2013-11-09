<? $this->load->view('global/header_view'); ?>

<? if (!empty($jobs)) : ?>

	<div class="row">        
		<table class="jobs">
			<thead>
				<tr>
					<th>Title</th>
					<th>Company</th>
					<th>Location</th>
					<th>Date Posted</th>
					<th>Apply</th>
					<th>Description</th>
				</tr>
			</thead>

			<tbody>
				<? foreach ($jobs as $job) : ?>
					<tr class="job">
						<td><?= $job->title ?></td>
						<td><?= $job->company ?></td>
						<td><?= $job->location ?></td>
						<td><?= $job->created ?></td>
						<td>
							<a href="<?= $job->url ?>">Apply</a>
						</td>
						<td><?= $job->description ?></td>
					</tr>
				<? endforeach; ?>
			</tbody>

		</table>
	</div>

<? endif; ?>

<? $this->load->view('global/footer_view'); ?>