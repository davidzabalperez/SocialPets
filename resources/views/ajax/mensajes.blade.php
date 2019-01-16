
            @foreach($mensajes as $mensaje)
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>{{ $mensaje->id_sender }} <span class="chat_date">Dec 25</span></h5> 
                  <p>{{ $mensaje->text }}</p>
                </div>
              </div>
            </div>
          @endforeach