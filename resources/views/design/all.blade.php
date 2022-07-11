


<x-head />
<x-sidebar />

    <div class="content-wrapper">
        <div class="content-header">
             <div class="col-sm-6">
                        <h1 class="m-0">デザイン一覧</h1>
                    </div><!-- /.col -->

 <form method="post" action="{{route('design_store')}}">
    @csrf
            <div class="card-body pb-0">
<div class="row">
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Photo-Site1
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
    <button type="submit"  name="photosite" class="btn btn-sm btn-primary" value="photo_site1" onClick="delete_alert(event);return false;">このデザインにする</button>

</a>
<a href="{{route('photo_site1')}}" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i>デザインを確認する
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Photo-Site2
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
    <button type="submit"  name="photosite" class="btn btn-sm btn-primary" value="photo_site2" onClick="delete_alert(event);return false;">このデザインにする</button>
</a>
<a href="{{route('photo_site2')}}" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i>デザインを確認する
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Photo-Site3
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
    <button type="submit"  name="photosite" class="btn btn-sm btn-primary" value="photo_site3" onClick="delete_alert(event);return false;">このデザインにする</button>
</a>
<a href="{{route('photo_site3')}}" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i>デザインを確認する
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
 </div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user2-160x160.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
</div>
</div>
        </div>

    </div>
</form>

<script>
function delete_alert(e){
   if(!window.confirm('こちらのデザインでよろしいですか？')){
      return false;
   }
   document.deleteform.submit();
};
</script>
<x-footer />
