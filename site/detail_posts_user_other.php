<?php
                if(isset($_SESSION['info'])){
                    $user = $_SESSION['info'];
                  ?>
      <div class="detail_user">
        <div class="avatar_name_detail_user">
          <div class="mt-3 avatar_detail_user">
            <img
              class="img"
              src="<?php echo $user['link_avatar'] ?>"
              alt=""
            />
          </div>
          <div class="name_detail_user">
            <div class="id_user_detail">
              <h2><?php echo $user['name'] ?></h2>
              <div class="share_user_detail">
                <i class='bx bx-share bx-flip-horizontal share_user_detail_i' ></i>
                <ul class="coplink_user_detail">
                  <li>
                    <a 
                      ><i class="bx bxl-facebook"></i>
                      <p>Chia Sẻ Với Facebook</p></a
                    >
                  </li>
                  <li>
                    <a  onclick="getURL();"
                      ><i class="bx bx-link-alt"></i>
                      <p>Sao chép liên kết</p></a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div id="notification-area">
        </div>
            <div class="name_user_detail">
              <h2>#<?php echo $user['id']  ?></h2>
            </div>
              <?php if($_SESSION['info']['id'] == $user['id']){?>
            <div class="edit_profile_user_detail">
              <button class="btn_edit_user">
                <i class="bx bxs-edit"></i><a href="?setting">Sửa hồ sơ</a>
              </button>
            </div>
              <?php }?>
          </div>
        </div>
        <div class="ms-4 mt-3 contact_user_detail">
          <div class="Interactive">
            <h5 class="number_user_fl">1</h5>
            <span class="text_interactive">Đang Follow</span>
          </div>
          <div class="Interactive">
            <h5 class="number_user_fl">1.5M</h5>
            <span class="text_interactive">Follower</span>
          </div>
          <div class="Interactive">
            <h5 class="number_user_fl">100M</h5>
            <span class="text_interactive">Thích</span>
          </div>
        </div>
        <div class="Story_user_detai mt-2">
          <span class="ms-4 text-secondary fs-5">Chưa có tiểu sử.</span>
        </div>
        <?php
                
                }
                    
                  ?>
        <div class="Post_user_detail">
         <div class="title_video_user_detail">
            <span class="btn_video fs-5 fw-normal"
              ><a href="?detail_video_other&id_account=<?php echo $user['id'] ?>">Video</a></span
            >
            <span class="btn_video fs-5 fw-normal"
              ><a href="?detail_posts_other&id_account=<?php echo $user['id'] ?>">Bài Viết</a></span
            >
            <span class="btn_video fs-5 fst-normal"
              ><i class="bx bxs-lock-alt"></i
              ><a href="?detail_video">Đã thích</a></span
            >
          </div>
          <div class="Posts_user">
            <!-- Render  -->
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
