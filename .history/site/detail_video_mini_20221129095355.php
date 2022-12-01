<div id="video_detail_mini">
      <div class="video_detail_mini_left">
        <div class="video_center">
          <span onclick="play()">
            <video  class="video_click_play"
            src="https://res.cloudinary.com/dnbbehk5b/video/upload/v1669361497/Fshort/video/T%C3%ACm_music_chill_tr%C3%AAn_TikTok_-_T%C3%ACm_ki%E1%BA%BFm_TikTok_4_ps7x6b.mp4"
            width="42%"
          ></video>
          </span>
          <div class="icon_play_video_center">
            <i onclick="play()" class="fa-solid fa-play"></i>
          </div>
          <div class="ranger_time_mini_video">
                <input id="seekslider_minivideo" type="range" min="0" max="100" value="0" step="1">
              <div class="time_ranger">
                   <span id="curtimetext_minivideo">00:00</span> / <span id="durtimetext_minivideo">00:00</span>
              </div>
          </div>
        </div>
        <div class="icon_video_center">
          <div class="close_video_detail_mini">
            <i onclick="showVideo()" class="bx bx-x"></i>
          </div>
          <div class="btn_report">
            <button><i class="bx bxs-flag-alt"></i><span>Báo cáo</span></button>
          </div>
          <div class="volum_video">
                        <div id="volum2"><i onclick="clickoffvollume()" class='bx bx-volume-full' ></i></div>
                       <div class="input_transform_video_mini">
                           <input id="volume" value="0.5" type="range"  min="0" max="1" step="0.01">
                       </div>
          </div>
        </div>
      </div>
      <div class="profile_detail_mini_right">
        <div class="avatar_name_icon_video_mini_right">
          <div class="avatar_mini_video">
            <img
              src="https://res.cloudinary.com/dnbbehk5b/image/upload/v1669366476/Fshort/image_post/hd-wallpaper-3625405_1920_uldxjo.jpg"
              alt=""
            />
          </div>
          <div class="name_setting_mini_video">
            <div class="name_mini_video">
              <h3>.leehai1508</h3>
              <h4><span>LeeHair .</span><span> 9-7</span></h4>
            </div>
            <div class="setting_mini_video">
              <i
                class="bx bx-dots-horizontal-rounded share_user_mini_video_i"
              ></i>
              <ul class="coplink_user_mini_video">
                <li>
                  <a href=""> <p>Cài đặt quyền riêng tư</p></a>
                </li>
                <li>
                  <a href=""> <p>Xóa</p></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="title_mini_video">
          Đây là trang chi tiết của trang video <span class="tag_mini_video">#demo #fshort</span>
        </div>
        <div class="Interactive_mini_video">
          <div class="icon_interactive_mini_left">
            <div class="heart_interactive">
              <i class='bx bxs-heart' onclick="heart_video_cmt()"></i>
              <span class="view_interactive_mini">0</span>
            </div>
            <div class="chat_interactive">
              <i class='bx bx-message-rounded-dots'></i>
              <span class="view_interactive_mini">124</span>
            </div>
          </div>
          <div class="icon_interactive_mini_right">
           <div class="icon_link_right_mini">
             <i class='bx bx-link' ></i>
             <span>Copy link</span>
           </div>
            <div class="icon_face_right_mini">
              <i class='bx bxl-facebook' ></i>
              <span>Chia sẻ lên facebook</span>
            </div>
            <div class="icon_share_right_mini">
              <i class='bx bxs-share bx-flip-horizontal' ></i>
            </div>
          </div>

        </div>
        <div class="comment_user_video_mini">
          <!-- <?php
            foreach ($allcmt as $value){
          ?>
            <div class="user_comment_video_mini">
              <div class="avatar_name_icon_mini_video">
                <div class="avatar_mini_video">
                  <img src="https://res.cloudinary.com/dnbbehk5b/image/upload/v1669366476/Fshort/image_post/1582719_l54ptb.jpg" alt="">
                </div>
                <div class="name_comment_mini_video">
                              <h4><?php  echo nameUser($value["id_account"])[0] ?></h4>
                              <span class="time_cmt_vdmini"><?php  echo $value["create_date"]?></span>
                    </div>
              </div>
              <div class="comment_video_mini">
               <div class="text_comment_video_mini">
                 <span><?php  echo $value["content"] ?></span><br>
               </div>
              </div>
            </div>

            <?php
                        }
                ?> -->
        </div>
        <form method="POST" id="comment_form" class="input_button_comment_video_mini">
          <input class="ip_cmt_mini" oninput="checkcomment_ipvideo()" type="text"placeholder="Thêm bình luận...">
           <input type="hidden" name="comment_id" id="id" value="0" />
          <input type="submit" class="btn_cmt_vdmini" value="Đăng"></input>
        </form>
      </div>
    </div>