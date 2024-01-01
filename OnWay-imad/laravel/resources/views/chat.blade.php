<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Add this line -->
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <link rel="stylesheet" type="text/css" href={{asset("css/chat.css")}}>
        <script src={{asset("js/script.js")}}></script>
        <!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
		<!-- Font awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


                @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
						<li class="active">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>{{$receiver->name}}</span>
									<p>Online</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
									<span class="online_icon offline"></span>
								</div>
								<div class="user_info">
									<span>Chaymae Naim</span>
									<p>Left 7 mins ago</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Sami Rafi</span>
									<p>Online</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256" class="rounded-circle user_img">
									<span class="online_icon offline"></span>
								</div>
								<div class="user_info">
									<span>Hassan Agmir</span>
									<p>Left 30 mins ago</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img">
									<span class="online_icon offline"></span>
								</div>
								<div class="user_info">
									<span>Abdou Chatabi</span>
									<p>Left 50 mins ago</p>
								</div>
							</div>
						</li>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>{{$receiver->name}}</span>
									<p>1767 Messages</p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
                        @foreach ($messages as $message)
						<div class="card-body msg_card_body">
							<div class="d-flex justify-content-start mb-4">
								<div class="msg_cotainer">
                                    @if ($message->sender == $sender->id)
                                    <p>{{$message->message}}</p>
                                    @endif
									<span class="msg_time">8:40 AM, Today</span>
								</div>


							</div>






							<div class="d-flex d-flex-col justify-content-end mb-4">

								<div class="msg_cotainer_send">
                                    @if ($message->sender != $sender->id)
                                    {{$message->message}}
                                    @endif


									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
							</div>
                                </div>
                                @endforeach
                                <div id="sender"></div>
                                <div id="receiver"></div>





						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<textarea name="message" id="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<span onclick={SendMessage()} class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts.js"></script>









    <script>
        function SendMessage() {
            var msg = document.getElementById('message').value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "/chat/{{$receiver->id}}", true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            // Send the AJAX request
        xhr.send(JSON.stringify({ _token: '{{ csrf_token() }}', message: msg }));
        document.getElementById('sender').innerHTML +=  `



<div class="msg_cotainer">

    ${msg} </br>

    <span class="msg_time">8:40 AM, Today</span>
</div>


`

        }
    </script>



<script>

const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    var pusher = new Pusher('fb30634078f0a2d84d5e', {
        channelAuthorization: { endpoint: "/pusher/auth"},
        headers: { "X-CSRF-Token": csrfToken },
        cluster: 'eu',
    });


        const channel = pusher.subscribe('private-chat.{{$sender->id}}.{{$receiver->id}}')

        channel.bind('chat', function(data) {
            alert('New Message')
        document.getElementById('receiver').innerHTML += `


        <div class="msg_cotainer_send">

            ${data.message}

            <span class="msg_time_send">8:55 AM, Today</span>
        </div>


        `
    })

</script>




    </body>
</html>
