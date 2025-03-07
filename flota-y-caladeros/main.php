<?php
  require_once("inc.config.php");
  require_once("../inc.basic.php");
  require_once("../inc.registra_visita.php");
  require_once("../inc.salvapantallas.php");
  require_once("../inc.alive.php");

  $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
  $current_url_no_params = $SERVER_URL.$uri_parts[0];

  $ELEMS  = get_strings();
  $ships = get_ships();
  $ship_types = get_ship_types();

  $buttons_color = ( isset($ELEMS["BUTTONS_COLOR"]) ? $ELEMS["BUTTONS_COLOR"]:"white");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$ELEMS["TIT_INTERACTIVO"]?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="in_animate_screen in_animate_screen_display">
    <svg class="in_screen_icon in_screen_icon_animate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.78 21.79">
      <title>Barco</title>
      <g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><path d="M29.3,18.78a4.55,4.55,0,0,1-6.1-.11,1.72,1.72,0,0,0-2.2,0,4.55,4.55,0,0,1-6.22,0,1.72,1.72,0,0,0-2.2,0A4.72,4.72,0,0,1,9.47,19.9a4.72,4.72,0,0,1-3.11-1.23,1.72,1.72,0,0,0-2.2,0,5.15,5.15,0,0,1-.68.5L4.29,12H33ZM8.49,8.4H22.61L24,10.15H8.3ZM8.8,5.63H20.49l.68.88H8.7Zm2.1-3.74h6.59a2.18,2.18,0,0,1,2.25,1.85H10.9Zm23.84,18a4.76,4.76,0,0,1-3.06-1.18l4-7.2a.85.85,0,0,0,0-.92,1.08,1.08,0,0,0-.89-.45H26.52l-4.62-6,0-.06V3.93A4.16,4.16,0,0,0,17.49,0H7.78a1,1,0,0,0-1,1,1,1,0,0,0,1,.94h1V3.74h-1a1,1,0,0,0-1,.85l-.61,5.56H4.28a2,2,0,0,0-2.08,1.7l-.41,3.62H1.05a1,1,0,1,0,0,1.89h.53l-.19,1.69h0a1.76,1.76,0,0,0,.11.82l-.45,0a1,1,0,1,0,0,1.89,6.83,6.83,0,0,0,4.21-1.47,6.76,6.76,0,0,0,8.42,0,6.76,6.76,0,0,0,8.42,0,6.76,6.76,0,0,0,8.42,0,6.85,6.85,0,0,0,4.22,1.47.95.95,0,1,0,0-1.89"/></g></g>
    </svg>

    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
  </div>




  <div class="interactive_map all_types">
    <div class="boat_type_selector rowcol1">
      <div class="boat_type_background">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 138.51 138.51"><defs><style>.cls-1{fill:#a0b5c9;}</style></defs><title>rosa-vientos-contornoAsset 15</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M69.26,138.51l-.16,0a.54.54,0,0,1-.18-.11.46.46,0,0,1-.13-.18h0l0-.12L61.34,88.37,21,118.27a.6.6,0,0,1-.11.06.43.43,0,0,1-.19,0,.51.51,0,0,1-.22,0,.38.38,0,0,1-.13-.09.39.39,0,0,1-.11-.15h0a.41.41,0,0,1-.05-.18h0a.51.51,0,0,1,0-.24l.06-.09,29.9-40.4L.43,69.75l-.13,0a.66.66,0,0,1-.17-.12.81.81,0,0,1-.1-.18.45.45,0,0,1,0-.16.41.41,0,0,1,0-.16.52.52,0,0,1,.1-.18A.48.48,0,0,1,.3,68.8l.13,0,49.71-7.42-29.9-40.4a.24.24,0,0,1-.06-.11h0a.64.64,0,0,1,0-.2.46.46,0,0,1,.05-.2h0a.45.45,0,0,1,.1-.14.38.38,0,0,1,.13-.09.46.46,0,0,1,.2-.05h0a.64.64,0,0,1,.2,0h0a.41.41,0,0,1,.11.07l40.4,29.9L68.76.43l0-.12h0a.66.66,0,0,1,.12-.17h0A.62.62,0,0,1,69.1,0h0l.16,0h0a.41.41,0,0,1,.16,0,.37.37,0,0,1,.17.1h0a.41.41,0,0,1,.12.17h0a.61.61,0,0,1,0,.13l7.42,49.71,40.4-29.9.12-.07a.64.64,0,0,1,.2,0h0a.46.46,0,0,1,.2.05h0a.34.34,0,0,1,.12.09.45.45,0,0,1,.1.14h0a.46.46,0,0,1,.05.2.44.44,0,0,1,0,.2h0a.41.41,0,0,1-.07.11L88.44,61.25l49.64,7.51.11,0a.56.56,0,0,1,.2.14.38.38,0,0,1,.09.15.44.44,0,0,1,0,.2.32.32,0,0,1,0,.14.35.35,0,0,1-.12.19.34.34,0,0,1-.17.11.2.2,0,0,1-.11,0L88.37,77.17l29.9,40.4.06.09a.51.51,0,0,1,0,.24.58.58,0,0,1,0,.19h0a.44.44,0,0,1-.12.15.94.94,0,0,1-.12.09.56.56,0,0,1-.23,0,.39.39,0,0,1-.18,0,.24.24,0,0,1-.11-.06l-40.4-29.9-7.42,49.71a.28.28,0,0,1,0,.13.36.36,0,0,1-.11.16h0a.78.78,0,0,1-.18.11h0l-.15,0ZM62.15,87l6.61,44.26V70.48l-7.87,8Zm7.61-16.54v60.8l7.88-52.79Zm7.58,16.77,35.42,26.22L78.54,79.24ZM60,79.25,25.75,113.47,61.17,87.25Zm-8.72-1.91L25.05,112.76,59.27,78.54Zm28,1.2,34.22,34.22L87.25,77.34ZM51.12,76.31,60,77.64l8-7.88H7.23L51.1,76.31Zm19.36-6.55,8,7.88,8.89-1.33h0l43.86-6.55Zm0-1h60.92L87.5,62.11h0l-9.12-1.38Zm-63.22,0H68l-8-7.89-8.9,1.33h0ZM60.87,60l7.89,8V7.23L62.2,51.11h0ZM69.76,7.23V68l7.88-8ZM25,25.69,51.26,61.17l8-1.31ZM79.23,59.85l8.09,1.23,26.19-35.39Zm-1.89-8.59,1.18,7.88,34.17-34ZM25.82,25.1,60,59.14l1.18-7.88Z"/><path class="cls-1" d="M72.93,113.91a.5.5,0,0,1-.5-.46.51.51,0,0,1,.46-.54,43.45,43.45,0,0,0,24.67-10.22.5.5,0,0,1,.64.77A44.45,44.45,0,0,1,73,113.91Zm-7.35,0h0a44.48,44.48,0,0,1-25.23-10.45.51.51,0,0,1-.06-.71.52.52,0,0,1,.71-.06,43.39,43.39,0,0,0,24.66,10.22.51.51,0,0,1,.46.54A.5.5,0,0,1,65.58,113.91Zm37.5-15.53a.52.52,0,0,1-.33-.12.5.5,0,0,1-.06-.7,43.45,43.45,0,0,0,10.22-24.67.53.53,0,0,1,.54-.46.5.5,0,0,1,.46.54A44.45,44.45,0,0,1,103.46,98.2.49.49,0,0,1,103.08,98.38Zm-67.64,0a.49.49,0,0,1-.38-.18A44.4,44.4,0,0,1,24.6,73a.51.51,0,0,1,.46-.54.5.5,0,0,1,.54.46A43.45,43.45,0,0,0,35.82,97.56a.5.5,0,0,1-.38.82ZM25.1,66.08h0a.5.5,0,0,1-.46-.54A44.42,44.42,0,0,1,35.06,40.31a.49.49,0,0,1,.7-.06.51.51,0,0,1,.06.71A43.39,43.39,0,0,0,25.6,65.62.5.5,0,0,1,25.1,66.08Zm88.31,0a.5.5,0,0,1-.5-.46A43.41,43.41,0,0,0,102.69,41a.51.51,0,0,1,.06-.71.51.51,0,0,1,.71.06,44.47,44.47,0,0,1,10.45,25.18.51.51,0,0,1-.46.54ZM40.6,36a.52.52,0,0,1-.38-.17.51.51,0,0,1,.06-.71A44.44,44.44,0,0,1,65.54,24.6a.51.51,0,0,1,.54.46.5.5,0,0,1-.46.54A43.43,43.43,0,0,0,40.93,35.84.52.52,0,0,1,40.6,36Zm57.28,0a.47.47,0,0,1-.32-.12A43.45,43.45,0,0,0,72.89,25.6a.5.5,0,0,1-.46-.54A.52.52,0,0,1,73,24.6,44.45,44.45,0,0,1,98.2,35.05a.51.51,0,0,1,.06.71A.49.49,0,0,1,97.88,35.94Z"/></g></g></svg>
      </div>
      <div class="boat_type_line boat_type_line_vertical"></div>
      <div class="boat_type_line boat_type_line_horizontal"></div>

      <?php
      // var_dump($ship_types[0]['tba_id']);
        ?>
      <?php foreach ($ship_types as $type) { ?>
        <?php // var_dump($type) ?>
        <?php $active = ".boat_positioning_layer.tipo_$type[tba_id] .boat_type.tipo_$type[tba_id] .led_light"; ?>
        <style>

          <?= $active ?> {
            /* background: currentColor; */
          }
          /* No click en categoría activa */
          /* .boat_positioning_layer[class*='tipo_<?= $type['tba_id'] ?>'][class*='boat_']:not([class="boat_positioning_layer"]) <?= ".$type[slug]" ?> {
            pointer-events: none;
          } */
        </style>
        <div
          class="boat_type <?= $type['slug'] ?> tipo_<?= $type['tba_id'] ?>"
          onclick="
            altClassFromSelector('<?= $type['slug'] ?>', '.interactive_map', ['interactive_map', '<?= $type['slug'] ?>']);
            altClassFromSelector('tipo_<?= $type['tba_id'] ?>', '.boat_positioning_layer', ['boat_positioning_layer', 'tipo_<?= $type['tba_id'] ?>']);"
        >
          <!-- <div class="led_light_wrapper">
            <div class="led_light boat_type_icon"></div>
          </div> -->
          <img src="<?= $DIR_ICONS ?>icono-<?= $type['slug'] ?>.svg" class="boat_type_figure">
          <p class="boat_type_name">
            <?= $type['tra_nombre_tba'] ?>
            <img class="boat_type_pointer" src="<?=$DIR_ICONS?>dedo-rojo.svg">
          </p>
        </div>
      <?php } ?>
    </div>

    <?php
    foreach ($ship_types as $type) {
      $self_awake = ".$type[slug] .boax.$type[slug]";
      ?>

      <style media="screen">
        <?= $self_awake ?> {
          opacity:1;
          pointer-events: all;
          z-index: 15;
          /* transform: translate(-50%, -50%) scale(1); */
          transform: scale(1);
          transition: all 0.5s var(--normal_curve), opacity 0.5s;
        }
      </style>
      <div class="boax rowcol1 <?= $type['slug'] ?>">
        <!-- <img class="boax_main_icon" src="<?=$DIR_ICONS?>barco-flota-azul-oscuro.svg" alt="Icono de bote"> -->
        <p class="boax_title"><?= $type['tra_nombre_tba'] ?></p>
        <img class="boax_deco" src="<?=$DIR_ICONS?>onda-flota.svg" alt="Decoración de ondas maritimas">
        <div class="boax_type_icon">
          <?php include $DIR_ICONS . "icono-$type[slug].svg" ?>
        </div>
        <p class="boax_txt"><?= $type['tra_descr_tba'] ?></p>
        <div class="boax_perk">
          <div class="boax_perk_icon"><?php include $DIR_ICONS . 'pez-flota.svg' ?></div>
          <p class="boax_perk_txt"><?= $type['tra_pesca_tba'] ?></p>
        </div>
        <div class="boax_perk">
          <div class="boax_perk_icon"><?php include $DIR_ICONS . 'localizacion-flota.svg' ?></div>
          <p class="boax_perk_txt"><?= $type['tra_barcos_tba'] ?></p>
        </div>
        <!-- <img class="close_boat_lightbox" src="<?=$DIR_ICONS?>cerrar-flota.svg" alt="Icono de equis para cerrar el Lightbox" onclick="altClassFromSelector('<?= $type['slug'] ?>', '.interactive_map')"> -->
        <div class="close_boat_lightbox_around" onclick="altClassFromSelector('<?= $type['slug'] ?>', '.interactive_map')"></div>
        <button class="close_boat_lightbox_text" onclick="altClassFromSelector('<?= $type['slug'] ?>', '.interactive_map')"><?= $type['tra_descubre_tba'] ?></button>
        <div class="boax_main_icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 162.69 208.04"><title>Dedo click</title><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><path class="" d="M112.18,199.18l-19.05.29A37.23,37.23,0,0,1,66,188.59L9.77,132.32a4.28,4.28,0,0,1,.09-6,10.67,10.67,0,0,1,13.83-1.16l34.77,25.08a4.26,4.26,0,0,0,4.46.29,4.43,4.43,0,0,0,2.39-3.85l1.36-90.9a8.12,8.12,0,0,1,8-7.91,7.53,7.53,0,0,1,7.67,7.69L81.8,91.08v.29l-.36,24.76a4.13,4.13,0,0,0,4.21,4.22A4.45,4.45,0,0,0,90,116l.37-25a8.14,8.14,0,0,1,8-7.71A7.71,7.71,0,0,1,106,91l-.19,11.91v.21l-.18,12.64a4.14,4.14,0,0,0,4.22,4.22,4.44,4.44,0,0,0,4.34-4.35l.19-12.78a8.13,8.13,0,0,1,8-7.77,7.7,7.7,0,0,1,7.68,7.67l-.22,12.67v0h0c0,.07,0,.05,0,0h0a4.13,4.13,0,0,0,4.23,4.08,4.45,4.45,0,0,0,4.33-4.35v-.73a8.14,8.14,0,0,1,8-7.72,7.83,7.83,0,0,1,7.68,7.48l-3,47.63a39.91,39.91,0,0,1-39,37.25m47.55-37,3-47.83A16.11,16.11,0,0,0,146.5,98.26a16.33,16.33,0,0,0-8,2.2,16.09,16.09,0,0,0-16.09-13.95,16.53,16.53,0,0,0-8,2.18A16.11,16.11,0,0,0,98.4,74.75a16.74,16.74,0,0,0-7.82,2.1l.32-21.47A15.83,15.83,0,0,0,74.7,39.26,17,17,0,0,0,58.1,55.87l-1.23,82.47-28-20.18a19.3,19.3,0,0,0-25,2.14,12.88,12.88,0,0,0-.27,18.17l56.26,56.26A45.49,45.49,0,0,0,93,208l19-.29a48.81,48.81,0,0,0,47.67-45.54"/><path class="cls-1" d="M110.3,68.76A38,38,0,0,0,102.17,28c-14.81-14.81-39.27-14.44-54.52.81a39.3,39.3,0,0,0-9.36,41,4.34,4.34,0,0,0,1,1.5,4.23,4.23,0,0,0,4.53.91,4.42,4.42,0,0,0,2.58-5.56,30.54,30.54,0,0,1,7.26-31.9C65.48,22.91,84.5,22.63,96,34.14a29.58,29.58,0,0,1,6.31,31.7,4.17,4.17,0,0,0,2.41,5.49,4.42,4.42,0,0,0,5.56-2.57"/><path class="cls-1" d="M122.22,82.83c13-22,9.78-49.59-7.76-67.13C93.08-5.68,57.75-5.16,35.72,16.88,17.65,34.94,13.63,62.66,26,84.27a3.84,3.84,0,0,0,.66.87,4.21,4.21,0,0,0,5.16.6,4.36,4.36,0,0,0,1.65-5.88c-10.43-18.28-7-41.73,8.25-57,18.65-18.64,48.54-19.08,66.63-1,14.84,14.83,17.54,38.19,6.56,56.8a4.17,4.17,0,0,0,1.47,5.83,4.38,4.38,0,0,0,5.88-1.65"/></g></g></svg>
        </div>
      </div>

    <?php } ?>

    <div class="boat_positioning_layer">
      <?php foreach ($ship_types as $type) { ?>
        <div class="boat_type_name_single tipo_<?= $type['tba_id'] ?>">
          <p class="boat_type_name boat_type_name_sm"><?= $type['slug'] ?></p>
        </div>

        <style>
          [class="interactive_map"] .boat_positioning_layer.tipo_<?= $type['tba_id'] ?> .boat_type_name_single.tipo_<?= $type['tba_id'] ?> {
            opacity: 1;
          }
        </style>
      <?php } ?>

      <?php $anim_delay = 0 ?>

      <?php
      // bar_tipo
      foreach ($ships as $barco) {
        // var_dump($barco['bar_tipo']);
      // foreach ($barcos as $barco) {
        $self_filtered = ".tipo_$barco[bar_tipo] .boat_position.tipo_$barco[bar_tipo]";
        $self_awake = ".boat_$barco[bar_id] .viday.boat_$barco[bar_id]";
        $css_class_led_video  = ".boat_positioning_layer.tipo_$barco[bar_tipo] .viday.boat_$barco[bar_id] + .boat_position.tipo_$barco[bar_tipo] .led_light";
        $css_class_boat_video = ".boat_positioning_layer.tipo_$barco[bar_tipo] .viday.boat_$barco[bar_id] + .boat_position.tipo_$barco[bar_tipo] .boat_icon";
        ?>
        <style media="screen">
          <?= $self_awake ?> {
            opacity:1;
            pointer-events: all;
            transform: translate(-50%, -50%) scale(1);
            transition: all 0.5s var(--normal_curve), opacity 0.5s;
            overflow: visible;
          }
          <?= $self_filtered ?> {
            z-index: 5;
          }

          [class='interactive_map'] .boat_positioning_layer:not(<?='.boat_' . $barco['bar_id']?>)<?= $self_filtered ?> {
            pointer-events: all;
            /* opacity:1;
            transform: translate(-50%, -50%) scale(1);
            transition: all 0.5s var(--normal_curve), opacity 0.5s;
            overflow: visible; */
          }
          <?= $css_class_led_video ?> {
            background-color: #A00;
          }

          <?='.boat_positioning_layer.boat_' . $barco['bar_id']?> {
            z-index: 5;
          }

          <?= $css_class_boat_video ?> {
            color: <?= $buttons_color ?>;
          }

          <?php $css_class_boat_played = ".boat_positioning_layer.tipo_$barco[bar_tipo] .viday.boat_$barco[bar_id].PLAYED_VIDEO + .boat_position.tipo_$barco[bar_tipo] .boat_icon"; ?>
          <?= $css_class_boat_played ?> {
            color: #A00;
          }

          <?php $css_class_no_types_on_video = "boat_positioning_layer tipo_$barco[bar_tipo] boat_$barco[bar_tipo]" ?>
          [class="<?= $css_class_no_types_on_video ?>"] .boat_type_selector {
            pointer-events: none;
          }
        </style>

        <div class="viday boat_<?= $barco['bar_id']  ?>">
          <?php // var_dump($barco); ?>
          <img class="live_video_icon" src="<?=$DIR_ICONS?>live.svg" alt="">
          <video
            class="viday_media"
            poster="<?= $DIR_MEDIA . $barco['bar_video'] ?>.jpg"
          >
            <source
              src="<?= $DIR_MEDIA . $barco['bar_video'] ?>.mp4"
              type="video/mp4"
              <?php $video_selector = ".viday.boat_$barco[bar_id]" ?>
              onerror="(function(){event.currentTarget.parentElement.parentElement.classList.add('NOT_VIDEO')})()"
            >
          </video>

          <div class="viday_caption">
            <h2 class="viday_title"><?= $ELEMS['TXT_TRIPULACION'] ?></h2>
            <p
              class="viday_play"
              onclick="
                altClassFromSelector('play', '.viday.boat_<?= $barco['bar_id'] ?>');
                playAudioFromSelector('.viday.boat_<?=$barco['bar_id']?> .viday_media');
                document.querySelector('.viday.boat_<?= $barco['bar_id'] ?>').classList.add('PLAYED_VIDEO');
              "
            ><?= $ELEMS['TXT_VIDEO'] ?></p>
          </div>
          <div class="close_boat_lightbox_around" onclick="altClassFromSelector('boat_<?= $barco['bar_id'] ?>', '.boat_positioning_layer', ['boat_positioning_layer', 'tipo_<?= $barco['bar_tipo'] ?>']);"></div>
          <div
            class="close_boat_lightbox back"
            onclick="
              altClassFromSelector('play', '.viday.boat_<?= $barco['bar_id']  ?>');
              playAudioFromSelector('.viday.boat_<?=$barco['bar_id']?> .viday_media', true);
            "
          >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><path d="M15,2.05A13,13,0,1,1,2.05,15,13,13,0,0,1,15,2.05m0,28A15,15,0,1,0,0,15,15,15,0,0,0,15,30"/><path fill="currentColor" d="M13,21.42a1,1,0,0,0,1.45,0,1,1,0,0,0,0-1.45L10.49,16H21.92a1,1,0,0,0,0-2.06H10.49L14.44,10a1,1,0,0,0,0-1.45,1,1,0,0,0-.73-.3,1,1,0,0,0-.72.3l-5.7,5.69a1,1,0,0,0,0,1.46Z"/></svg>
          </div>
        </div>

        <div
          class="boat_position pos_<?=$barco['bar_id']?> tipo_<?=$barco['bar_tipo']?>"
          onclick="altClassFromSelector('boat_<?= $barco['bar_id']  ?>', '.boat_positioning_layer', ['boat_positioning_layer', 'tipo_<?= $barco['bar_tipo'] ?>'])"
          style="top:<?= $barco['cal_posy'] ?>%;left:<?= $barco['cal_posx'] ?>%;transition-delay:<?= $anim_delay += 0.1 ?>s"
          >
          <div class="boat_icon">
            <?php include $DIR_ICONS . 'barco-flota-blanco.svg' ?>
          </div>
          <div class="led_light_wrapper">
            <div class="led_light"></div>
          </div>
        </div>
      <?php } ?>
    </div>








    <div class="panel">
      <!-- TODO: mover este boton a donde corresponda -->

      <div class="panel_buttons">
        <a href="index.php" class="home_btn" style="color: <?= $buttons_color ?>;">
          <?php include $DIR_ICONS.'home.svg' ?>
        </a>

        <button class="back_btn" style="color: <?= $buttons_color ?>;" onclick="
          altClassFromSelector('', '.boat_positioning_layer', ['boat_positioning_layer']);
          altClassFromSelector('all_types', '.interactive_map', ['interactive_map']);"
        >
          <?php include $DIR_ICONS.'atras.svg' ?>
        </button>
      </div>


      <h3 class="panel_title"><?= $ELEMS['MENU_TEXTO'] ?></h3>

      <div class="panel_text_1">
        <p class="panel_text"><?= $ELEMS['TXT_BARCOS_FAENANDO'] ?></p>
        <p class="panel_text panel_text_md"><?= $ELEMS["TXT_SELECCIONA_UNO"] ?></p>
      </div>

      <div class="panel_text_2">
        <p class="panel_text panel_text_md"><?= $ELEMS["TXT_SELECCIONA_BARCO"] ?></p>
      </div>
    </div>

    <img class="map rowcol1" src="<?=$DIR_IMG?>mapa.jpg" alt="" title="">
    <img class="cross_positions rowcol1" src="<?=$DIR_ICONS?>cruces-posicion.svg" alt="" title="">

  </div>

  <script type="text/javascript" src="../js/scripts_nosocket.js"></script>
  <!-- Redirect timer -->
  <script> redirect_time = <?= $redirect_time ?>; </script>
  <script type="text/javascript" src="js/main.js"></script>
  <script>window.onload=_=>{out_animate_screen()}</script>
</body>
</html>
