<div class="row push p-sm-2 p-lg-4">
  <div class="offset-xl-1 col-xl-4 order-xl-1">
    <p class="bg-body-light p-4 rounded-3 text-muted fs-sm">
      Preencha suas informações de perfil. Os campos com * são obrigatórios.
    </p>
  </div>
  <div class="col-xl-6 order-xl-0">
    <?php
    // Obtém as informações do usuário atual
    $current_user = wp_get_current_user();

    // Verifica se o formulário foi enviado
    if (isset($_POST['update_profile'])) {

      // Obtém os valores enviados pelo formulário
      $user_email = sanitize_email($_POST['user_email']);
      $user_first_name = sanitize_text_field($_POST['user_first_name']);
      $user_last_name = sanitize_text_field($_POST['user_last_name']);
      $user_display_name = sanitize_text_field($_POST['display_name']);
      $user_nickname = sanitize_text_field($_POST['nickname']);
      $user_website = esc_url($_POST['user_website']);
      $user_bio = esc_textarea($_POST['user_bio']);
      $user_password = $_POST['password'];

      // Atualiza as informações do usuário
      $user_id = get_current_user_id();
      $user_args = array(
        'ID' => $user_id,
        'user_email' => $user_email,
        'first_name' => $user_first_name,
        'last_name' => $user_last_name,
        'display_name' => $user_display_name,
        'nickname' => $user_nickname,
        'user_url' => $user_website,
        'description' => $user_bio
      );

      // Atualiza campos personalizados do ACF
      update_field('profile_imagem_de_perfil', $_FILES['profile_imagem_de_perfil'], 'user_' . $user_id);
      update_field('profile_cpf', sanitize_text_field($_POST['profile_cpf']), 'user_' . $user_id);
      update_field('profile_rg', sanitize_text_field($_POST['profile_rg']), 'user_' . $user_id);
      update_field('profile_tipo_de_telefone', sanitize_text_field($_POST['profile_tipo_de_telefone']), 'user_' . $user_id);

      if ($_POST['profile_tipo_de_telefone'] === 'brasil') {
        update_field('profile_telefone', sanitize_text_field($_POST['profile_telefone']), 'user_' . $user_id);
      } elseif ($_POST['profile_tipo_de_telefone'] === 'fora') {
        update_field('profile_telefone_fora', sanitize_text_field($_POST['profile_telefone_fora']), 'user_' . $user_id);
      }

      update_field('profile_profissao', sanitize_text_field($_POST['profile_profissao']), 'user_' . $user_id);
      update_field('profile_instrutor_pessoal', sanitize_text_field($_POST['profile_instrutor_pessoal']), 'user_' . $user_id);
      update_field('profile_data_da_instrucao_pessoal', sanitize_text_field($_POST['profile_data_da_instrucao_pessoal']), 'user_' . $user_id);
      update_field('profile_aniversario', sanitize_text_field($_POST['profile_aniversario']), 'user_' . $user_id);

      if ($user_password) {
        $user_args['user_pass'] = $user_password;
      }

      wp_update_user($user_args);

      // Verifica se o perfil foi atualizado com sucesso
      if (!is_wp_error($user_id)) {
        // Mostra uma mensagem de sucesso
        echo '<div class="alert alert-success">Seu perfil foi atualizado com sucesso!</div>';
      } elseif (is_wp_error($user_id)) {
        // Mostra uma mensagem de erro
        echo '<div class="alert alert-danger">Ocorreu um erro. Por favor, verifique e envie novamente!</div>';
      }
    }
    ?>

    <form method="post" action="<?php echo get_permalink(); ?>" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" class="form-label" for="user_email">E-mail</label>
        <input class="form-control" type="email" name="user_email" value="<?php echo $current_user->user_email; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label" class="form-label" for="user_first_name">Nome</label>
        <input class="form-control" type="text" name="user_first_name" value="<?php echo $current_user->first_name; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" class="form-label" for="user_last_name">Sobrenome</label>
        <input class="form-control" type="text" name="user_last_name" value="<?php echo $current_user->last_name; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" class="form-label" for="display_name">Exibir o nome publicamente como</label>
        <select class="form-select" name="display_name" id="display_name">
          <?php
          $public_display                     = array();
          $public_display['display_nickname'] = $current_user->nickname;
          $public_display['display_username'] = $current_user->user_login;

          if (!empty($current_user->first_name)) {
            $public_display['display_firstname'] = $current_user->first_name;
          }

          if (!empty($current_user->last_name)) {
            $public_display['display_lastname'] = $current_user->last_name;
          }

          if (!empty($current_user->first_name) && !empty($current_user->last_name)) {
            $public_display['display_firstlast'] = $current_user->first_name . ' ' . $current_user->last_name;
            $public_display['display_lastfirst'] = $current_user->last_name . ' ' . $current_user->first_name;
          }

          if (!in_array($current_user->display_name, $public_display, true)) { // Only add this if it isn't duplicated elsewhere.
            $public_display = array('display_displayname' => $current_user->display_name) + $public_display;
          }

          $public_display = array_map('trim', $public_display);
          $public_display = array_unique($public_display);

          ?>
          <?php foreach ($public_display as $id => $item) : ?>
            <option <?php selected($current_user->display_name, $item); ?>><?php echo $item; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label" class="form-label" for="nickname">Apelido (obrigatório)</label>
        <input class="form-control" type="text" name="nickname" value="<?php echo $current_user->nickname; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label" class="form-label" for="user_website">Website</label>
        <input class="form-control" type="url" name="user_website" value="<?php echo $current_user->user_url; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" class="form-label" for="user_bio">Biografia</label>
        <textarea class="form-control" name="user_bio"><?php echo $current_user->description; ?></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label" class="form-label me-3" for="user_avatar">Foto do perfil</label>
        <?php //echo get_avatar( $current_user->ID, 100 ); 
        ?>
        <?php if (get_option('show_avatars')) : ?>

          <?php echo get_avatar($current_user->ID, 100, '', 'avatar', $args = array('class' => 'img-avatar mb-2')); ?>
          <p class="description">
            <?php
            $description = sprintf(
              /* translators: %s: Gravatar URL. */
              __('<a target="_blank" href="%s">Você pode mudar sua foto de perfil no Gravatar</a>.'),
              __('https://pt.gravatar.com/')
            );

            echo apply_filters('user_profile_picture_description', $description, $current_user->ID);
            ?>
          </p>
        <?php endif; ?>
      </div>
      <div class="mb-3">
        <label class="form-label" class="form-label" for="password">Nova senha</label>
        <input class="form-control" type="password" name="password" value="">
      </div>
      <div class="mb-3">
        <label class="form-label" class="form-label" for="confirm_password">Confirme a nova senha</label>
        <input class="form-control" type="password" name="confirm_password" value="">
      </div>
      <div class="mt-5 mb-3">
        <h3>Perfil do Meditante</h3>
      </div>
      <!-- Campos personalizados do ACF -->
      <div class="mb-3">
        <label class="form-label" for="profile_imagem_de_perfil">Imagem de Perfil</label>
        <?php
        $profile_imagem_de_perfil = get_field('profile_imagem_de_perfil', 'user_' . $current_user->ID);
        if ($profile_imagem_de_perfil) {
          echo '<img src="' . esc_url($profile_imagem_de_perfil['url']) . '" alt="' . esc_attr($profile_imagem_de_perfil['alt']) . '" />';
        }
        ?>
        <input class="form-control" type="file" name="profile_imagem_de_perfil">
      </div>
      <div class="mb-3">
        <label class="form-label" for="profile_cpf">CPF</label>
        <input class="form-control" type="text" name="profile_cpf" value="<?php echo get_field('profile_cpf', 'user_' . $current_user->ID); ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="profile_rg">RG</label>
        <input class="form-control" type="text" name="profile_rg" value="<?php echo get_field('profile_rg', 'user_' . $current_user->ID); ?>">
      </div>
      <div class="mb-3">
        <?php
        $profile_tipo_de_telefone = get_field('profile_tipo_de_telefone', 'user_' . $current_user->ID);
        $profile_telefone = get_field('profile_telefone', 'user_' . $current_user->ID);
        $profile_telefone_fora = get_field('profile_telefone_fora', 'user_' . $current_user->ID);
        ?>
        <label class="form-label" class="form-check-label" for="profile_tipo_de_telefone">Tipo de Telefone</label><br>
        <input class="form-check-input" type="radio" name="profile_tipo_de_telefone" value="brasil" <?php checked('brasil', $profile_tipo_de_telefone); ?>> Brasil
        <input class="form-check-input" type="radio" name="profile_tipo_de_telefone" value="fora" <?php checked('brasil', $profile_tipo_de_telefone); ?>> Fora
      </div>
      <div class="mb-3">
        <!-- Campos condicionais para o tipo de telefone -->
        <div id="telefone-brasil" style="display: none;">
          <label class="form-label" for="profile_telefone">Telefone (Brasil)</label>
          <input class="form-control" type="text" name="profile_telefone" value="<?php echo esc_attr($profile_telefone); ?>">
        </div>
        <div id="telefone-fora" style="display: none;">
          <label class="form-label" for="profile_telefone_fora">Telefone (Fora do Brasil)</label>
          <input class="form-control" type="text" name="profile_telefone_fora" value="<?php echo esc_attr($profile_telefone_fora); ?>">
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="profile_profissao">Profissão</label>
        <input class="form-control" type="text" name="profile_profissao">
      </div>
      <div class="mb-3">
        <label class="form-label" for="profile_instrutor_pessoal">Instrutor Pessoal</label>
        <select class="form-select" name="profile_instrutor_pessoal">
          <?php
          $users = get_users(array(
            'role__in' => array('author', 'editor'),
          ));
          foreach ($users as $user) {
            echo '<option value="' . esc_attr($user->ID) . '">' . esc_html($user->display_name) . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label" for="profile_data_da_instrucao_pessoal">Data da Instrução Pessoal</label>
        <input class="form-control" type="date" name="profile_data_da_instrucao_pessoal" value="<?php echo esc_attr(get_field('profile_data_da_instrucao_pessoal', 'user_' . $current_user->ID)); ?>">
      </div>


      <div class="mb-3">
        <label class="form-label" for="profile_aniversario">Data de Aniversário</label>
        <?php
        $profile_aniversario = get_field('profile_aniversario', 'user_' . $current_user->ID);
        if ($profile_aniversario) {
          $formatted_date = date('d/m/Y', strtotime($profile_aniversario));
        } else {
          $formatted_date = '';
        }
        ?>
        <input class="form-control" type="date" name="profile_aniversario" value="<?php echo esc_attr($formatted_date); ?>">
      </div>
      <div class="mb-3">
        <button name="update_profile" type="submit" class="btn btn-primary">
          <i class="fa fa-save opacity-50 me-2"></i>
          <span><?php _e('Atualizar perfil', 'mt-area'); ?></span>
        </button>
      </div>
    </form>

  </div>
</div>

<script>
  jQuery(document).ready(function($) {
    $('input[name="profile_tipo_de_telefone"]').change(function() {
      if ($(this).val() === 'brasil') {
        $('#telefone-brasil').show();
        $('#telefone-fora').hide();
      } else if ($(this).val() === 'fora') {
        $('#telefone-brasil').hide();
        $('#telefone-fora').show();
      } else {
        $('#telefone-brasil').hide();
        $('#telefone-fora').hide();
      }
    });
  });
</script>