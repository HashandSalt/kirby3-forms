<?php


// Create HTML Labels
function label($txt, $for, $class)
{
  $label = Html::tag('label', $txt, ['for' => $for, 'class' => $class]);
  return $label;
}

// Create HTML Inputs
function input($type, $name, $id, $class, $opt = null)
{
  $attr = [
    'type'  => $type,
    'name'  => $name,
    'id'    => $id,
    'class' => $class
  ];

  if ($opt === null) {
    $a = $attr;
  } else {
    $a = array_merge($attr, $opt);
  };

  $field = Html::tag('input', null, $a);
  return $field;
}

// Create HTML Textareas Inputs
function textarea($name, $id, $class, $opt = null)
{
  $attr = [
    'name'  => $name,
    'id'    => $id,
    'class' => $class
  ];

  if ($opt === null) {
    $a = $attr;
  } else {
    $a = array_merge($attr, $opt);
  };

  $field = Html::tag('textarea', null, $a);
  return $field;
}

// Create HTML Textareas Inputs
function select($name, $id, $class, $opt = null, $list = null, $selected = true, $idx = '')
{
  $attr = [
    'name'  => $name,
    'id'    => $id,
    'class' => $class
  ];

  foreach ($list as $key => $value) {
    if ($key === $idx) {
      if ($selected == true) {
        $l[$idx] = Html::tag('option', $key, ["value" => $value, "selected" => true]);
      } else {
        $l[] = Html::tag('option', $key, ["value" => $value]);
      }
    } else {
      $l[] = Html::tag('option', $key, ["value" => $value]);
    }
  }

  if ($opt === null) {
    $a = $attr;
  } else {
    $a = array_merge($attr, $opt);
  };

  $field = Html::tag('select', $l, $a);
  return $field;
}

// Create Button Elements
function button($type, $name, $id, $class, $txt, $opt = null)
{
  $attr = [
    'name'  => $name,
    'id'    => $id,
    'class' => $class,
    'type' => $type
  ];

  if ($opt === null) {
    $a = $attr;
  } else {
    $a = array_merge($attr, $opt);
  };

  $field = Html::tag('button', $txt, $a);
  return $field;
}


// Create Error / Succes Messages
function formMsg($tag, $msg, $class)
{
  return Html::tag($tag, $msg, ['class' => $class]);
}
