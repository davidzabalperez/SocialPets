
            @foreach($mensajes as $mensaje)
            <div class="chat_list target">
              <div class="chat_people">
                <div class="chat_img"> <img src="/storage/avatars/{{ $mensaje->user_sender->avatar }}" /></div>
                <div class="chat_ib">
                  <h5>{{ $mensaje->user_sender->name }} <span class="chat_date">Dec 25</span></h5> 
                  <p>{{ $mensaje->text }}</p>
                </div>
              </div>
            </div>
          @endforeach