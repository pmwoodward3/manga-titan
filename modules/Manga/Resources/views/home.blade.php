@extends('manga::master')

@section('title')
@parent - Home
@endsection

@section('breadcrumb')
<a href="#" class="section">Home</a>
@endsection

@section('page-header')
Manga List
@endsection

@section('page-subheader')
Read Manga Online
@endsection

@set('routeurl',route('manga.desc','{id}'))
@set('routeurl', str_ireplace(['%7B','%7D'],['{','}'], $routeurl))
@section('content')
	<div class="eleven wide column">
		<div class="portlet light bordered">
			<vue-form name="list" action-refresh="get-manga" :prevent-submit="false" method="get">
				<div class="ui stackable grid manga-grid">
					<vue-filter></vue-filter>
					<vue-grid
					:maps="{id:'id', title:'title', image:'thumb'}"
					is-component="vue-manga-extra"
					:can-select="false"
					:with-link="true"
					link-format="{{$routeurl}}"></vue-grid>
					<div class="sixteen wide column"><vue-page></vue-page></div>
				</div>
			</vue-form>
		</div>
	</div>
	<div class="five wide column">
		<div class="ui one column grid">
			<div class="row">
				<div class="column">
					<div class="ui styled fluid accordion">
						<div class="title active"><i class="icon tag"></i>Tags</div>
						<div class="content active">
							<div class="ui labels tags">
								<a href="#" class="ui red label">Yaoi</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<div class="ui styled fluid accordion">
						<div class="title active"><i class="icon tag"></i>Most Popular</div>
						<div class="content active">
							<div class="ui middle aligned selection divided list manga-side-list">
								<div class="item" v-for="i in 5">
									<div class="right floated content">
										<div class="ui blue horizontal label">#@{{ i+1 }}</div>
									</div>
									<div class="content">
										<a>Team Hessasda dada asda efa sfa e asd</a>
										<div class="description">
											<div class="ui star rating" data-rating="3"></div>
											<div class="right floated">1234 <i class="icon unhide"></i></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<div class="ui styled fluid accordion">
						<div class="title active"><i class="icon tag"></i>Most Popular</div>
						<div class="content active">
							<div class="ui middle aligned selection divided list manga-side-list">
								<div class="item" v-for="i in 5">
									<!-- <div class="right floated content">
										<div class="ui blue horizontal label">#@{{ i+1 }}</div>
									</div> -->
								    <div class="content">
								      <a>Team Hessasda dada asda efa sfa e asd</a>
								      <div class="description">
								      	<div class="ui star rating" data-rating="3"></div>
								      	<div class="right floated">Posted 1 day ago</div>
								      </div>
								    </div>
								  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
