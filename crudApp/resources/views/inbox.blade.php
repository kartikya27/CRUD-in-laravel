<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   <x-head/>



<body>
    <x-Header/>

<!-- {{Session::get('user')['name']}} -->
<div class="container mt-4">
<div class="row inbox-wrapper">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            
           <!-- sidenav here  -->
          <x-Sidenav currentPage="inbox" />

            <div class="col-lg-9 email-content">
              
            <div class="table-responsive">
							<table class="table">
								<tbody>
                  @foreach($mails as $mail)
                  
                  <tr class="@if($mail['read']==0)unread @endif">
									<td class="action"><input type="checkbox" /></td>
									<td class="action"><i class="fa fa-star-o"></i></td>
									<td class="action"><i class="fa fa-bookmark-o"></i></td>
									<td class="name"><a href="#">{{$mail['senderName']}}</a></td>
									<td class="subject text-truncate">{{$mail['subject']}}</td>
									<td class="time ">{{$mail['created_at']}}</td>
								</tr>
                  @endforeach
              
							
							
							</tbody></table>
              
            </div>
          </div>
            
        </div>
      </div>
    </div>
  </div>
</div>
<x-Composemail />
</body>