@extends('demo.layouts.app')
@section('title', 'FAQ')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
	<div class="page-header">
		<div class="header-left-panel">
			<!--  Title Page -->
			<h1 class="page-title">FAQ</h1>
			<!--  Breadcrumb Section -->
			<ol class="breadcrumb">
				<li><a href="{{ route('demo.index') }}">Home</a></li>
				<li class="text-info">General Pages</li>
				<li class="active">FAQ</li>
			</ol>
		</div>
	</div>
	<div class="page-content faq">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<!-- Start General Section -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Lorem ipsum</h3>
					</div>
					<div class="panel-body">
						<div class="animation-fade active">
							<div class="panel-group panel-group-simple panel-group-continuous">
								<div class="panel panel-faq" role="tablist">
									<div class="panel-heading" id="question-1" role="tab">
										<a class="panel-title collapsed fs1" data-icon="L" aria-controls="answer-1" aria-expanded="true" href="#answer-1" data-toggle="collapse" data-parent="#accordion">What is Lorem ipsum?</a>
									</div>
									<div class="panel-collapse collapse in" id="answer-1" aria-labelledby="question-1" role="tabpanel">
										<div class="panel-body padding-top-0">
											Exeamus, frustra, imperitorum torquate artem efficeret talem vivendi, primum libidinem
											virtus apte incurrunt, appetendum utramque, oderis. Homines
											traditur loquerer fugiat sequitur gravitate nisi recordatione
											efflorescere. Primisque hostis prorsus praeda, solitudo
											labefactetur miserum chrysippi afficit deterret ipsam.
										</div>
									</div>
								</div>
								<div class="panel panel-faq" role="tablist">
									<div class="panel-heading" id="question-2" role="tab">
										<a class="panel-title collapsed fs1" data-icon="L" aria-controls="answer-2" aria-expanded="false" href="#answer-2" data-toggle="collapse" data-parent="#accordion">How much does it cost to use Lorem ipsum?</a>
									</div>
									<div class="panel-collapse collapse" id="answer-2" aria-labelledby="question-2" role="tabpanel">
										<div class="panel-body padding-top-0">
											Laborum commodo cupidatat adipisicing aliqua qui in dolore occaecat labore nisi
											occaecat enim dolor sit exercitation sit Duis minim tempor
											est aliquip sit nostrud ea ea sit nostrud dolore cillum
											exercitation officia sunt pariatur consequat velit id
											nulla id Duis minim sunt sint culpa amet veniam commodo
											nisi reprehenderit tempor irure sunt enim in eu reprehenderit
											anim nulla tempor pariatur nisi fugiat consectetur sint
											deserunt elit voluptate in in labore eiusmod nostrud
											eiusmod est ullamco sit qui ut ut velit in veniam in
											Ut nulla pariatur reprehenderit deserunt laboris sed
											cupidatat est dolore adipisicing Duis in ut dolore dolor
											sunt aute ut Excepteur sint consectetur.
										</div>
									</div>
								</div>
								<div class="panel panel-faq" role="tablist">
									<div class="panel-heading" id="question-3" role="tab">
										<a class="panel-title collapsed fs1" data-icon="L" aria-controls="answer-3" aria-expanded="false" href="#answer-3" data-toggle="collapse" data-parent="#accordion">What is the lorem ipsum pariatur?</a>
									</div>
									<div class="panel-collapse collapse" id="answer-3" aria-labelledby="question-3" role="tabpanel">
										<div class="panel-body padding-top-0">
											Laborum commodo cupidatat adipisicing aliqua qui in dolore occaecat labore nisi
											occaecat enim dolor sit exercitation sit Duis minim tempor
											est aliquip sit nostrud ea ea sit nostrud dolore cillum
											exercitation officia sunt pariatur consequat velit id
											nulla id Duis minim sunt sint culpa amet veniam commodo
											nisi reprehenderit tempor irure sunt enim in eu reprehenderit
											anim nulla tempor pariatur nisi fugiat consectetur sint
											deserunt elit voluptate in in labore eiusmod nostrud
											eiusmod est ullamco sit qui ut ut velit in veniam in
											Ut nulla pariatur reprehenderit deserunt laboris sed
											cupidatat est dolore adipisicing Duis in ut dolore dolor
											sunt aute ut Excepteur sint consectetur.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End General Section -->
				<!-- Start Payment Section -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Consectetur adipiscing</h3>
					</div>
					<div class="panel-body">
						<div class="animation-fade">
							<div class="panel-group panel-group-simple panel-group-continuous">
								<div class="panel panel-faq" role="tablist">
									<div class="panel-heading" id="question-5" role="tab">
										<a class="panel-title collapsed fs1" data-icon="L" aria-controls="answer-5" aria-expanded="true" href="#answer-5" data-toggle="collapse" data-parent="#accordion">Can I exercitation occaecat voluptate duis ut dolore?</a>
									</div>
									<div class="panel-collapse collapse in" id="answer-5" aria-labelledby="question-5" role="tabpanel">
										<div class="panel-body padding-top-0">
											Consecutus sicine hominum, artem conclusionemque patientia, omni fuerit intemperantiam efficeretur phaedrum minime obiecta constituam, motus mandamus perfunctio contra, imagines exquisitis reiciat.
										</div>
									</div>
								</div>
								<div class="panel panel-faq" role="tablist">
									<div class="panel-heading" id="question-6" role="tab">
										<a class="panel-title collapsed fs1" data-icon="L" aria-controls="answer-6" aria-expanded="false" href="#answer-6" data-toggle="collapse" data-parent="#accordion">How do lorem ipsum quis magna magna?</a>
									</div>
									<div class="panel-collapse collapse" id="answer-6" aria-labelledby="question-6" role="tabpanel">
										<div class="panel-body padding-top-0">
											Pluribus horum laetamur forensibus investigandi gravissimis quaeque possumus copulationesque. Sapientium interdictum, secutus servata expressas reici. Dixerit dixerit tantis conscientiam arbitramur reprehensa traditur propositum locos remotis, metus continent maledici attico sermo iucundius gerendarum. Bonarum incommoda afferrent iisque graeca perdiscere munere recordatione nos sapiens, perspexit, oderit nominata.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Payment Section -->
				<!-- Start Offers Section -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Tenent mordicus</h3>
					</div>
					<div class="panel-body">
						<div class="animation-fade">
							<div class="panel-group panel-group-simple panel-group-continuous">
								<div class="panel panel-faq" role="tablist">
									<div class="panel-heading" id="question-7" role="tab">
										<a class="panel-title collapsed" data-icon="L" aria-controls="answer-7" aria-expanded="true" href="#answer-7" data-toggle="collapse" data-parent="#accordion">How can I lorem ipsum elit commodo?</a>
									</div>
									<div class="panel-collapse collapse in" id="answer-7" aria-labelledby="question-7" role="tabpanel">
										<div class="panel-body padding-top-0">
											Lorem ipsum Est dolore eiusmod sunt fugiat sunt minim qui ullamco incididunt mollit.
										</div>
									</div>
								</div>
								<div class="panel panel-faq" role="tablist">
									<div class="panel-heading" id="question-8" role="tab">
										<a class="panel-title collapsed" data-icon="L" aria-controls="answer-8" aria-expanded="false" href="#answer-8" data-toggle="collapse" data-parent="#accordion">Do I have to torquate artem irure et quis dolor?</a>
									</div>
									<div class="panel-collapse collapse" id="answer-8" aria-labelledby="question-8" role="tabpanel">
										<div class="panel-body padding-top-0">
											Pluribus horum laetamur forensibus investigandi gravissimis quaeque possumus copulationesque. Sapientium interdictum, secutus servata expressas reici. Dixerit dixerit tantis conscientiam arbitramur reprehensa traditur propositum locos remotis, metus continent maledici attico sermo iucundius gerendarum. Bonarum incommoda afferrent iisque graeca perdiscere munere recordatione nos sapiens, perspexit, oderit nominata.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Offers Section -->
				<!-- Start Security and Privacy Section -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Gloriosa ostentatio</h3>
					</div>
					<div class="panel-body">
						<div class="animation-fade">
							<div class="panel-group panel-group-simple panel-group-continuous">
								<div class="panel panel-faq" role="tablist">
									<div class="panel-heading" id="question-9" role="tab">
										<a class="panel-title collapsed fs1" data-icon="L" aria-controls="answer-9" aria-expanded="true" href="#answer-9" data-toggle="collapse" data-parent="#accordion">What if caritatem interesse nulla ut non esse laborum?</a>
									</div>
									<div class="panel-collapse collapse in" id="answer-9" aria-labelledby="question-9" role="tabpanel">
										<div class="panel-body padding-top-0">
											Malint docui o animos opus confidam isti animadvertat sententiae, imagines faciendumve varias dolemus detrimenti caritatem, interesse primos perfecto.
										</div>
									</div>
								</div>
								<div class="panel panel-faq" role="tablist">
									<div class="panel-heading" id="question-10" role="tab">
										<a class="panel-title collapsed fs1" data-icon="L" aria-controls="answer-10" aria-expanded="false" href="#answer-10" data-toggle="collapse" data-parent="#accordion">Do my tempor fugiat dolore culpa commodo ex?</a>
									</div>
									<div class="panel-collapse collapse" id="answer-10" aria-labelledby="question-10" role="tabpanel">
										<div class="panel-body padding-top-0">
											Pluribus horum laetamur forensibus investigandi gravissimis quaeque possumus copulationesque. Sapientium interdictum, secutus servata expressas reici. Dixerit dixerit tantis conscientiam arbitramur reprehensa traditur propositum locos remotis, metus continent maledici attico sermo iucundius gerendarum. Bonarum incommoda afferrent iisque graeca perdiscere munere recordatione nos sapiens, perspexit, oderit nominata.
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Security and Privacy Section -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Contain Section -->
@endsection