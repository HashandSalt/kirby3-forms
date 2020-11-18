# Kirby 3 Forms

A small plugin for creating HTML forms more easily. Mixing HTML with PHP is quite unreadable, and this approach has the bonus of being to offload logic to the controller if necessary - this is convenient for things like select field where you might want to loop over a structure field to populate the option list.

## Installation

### Manual

To use this plugin, place all the files in `site/plugins/kirby3-forms`.

### Composer

```
composer require hashandsalt/kirby3-forms
```
****

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider to
- [make a donation 🍻](https://paypal.me/hashandsalt?locale.x=en_GB) or
- [buy a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/36141?link=1170)

****

## Usage

The plugin contains a number of functions to make it easier to create form elements, matching labels, and error messages.



### Input Function

Accepts an HTML input type, name, css ID, css class, and an array of all other HTML attributes needed.

```
<?= input($type, $name, $id, $class, $opt = []) ?>
```

Working example:

```
<?= input('email', 'emailAddress', 'email', 'input-class', ['pattern' => '.+@globex.com', 'size' => '30']) ?>
```

### Label Function

Accepts label text, for attribute, and css class.

```
<?= label($txt, $for, $class) ?>
```

Working example:

```
<?= label('Enter Email Address:', 'emailAddress', 'label-class') ?>
```

### Textarea Function

Accepts name, for attribute, and css class.

```
<?= textarea('feedback', 'userFeedback', 'input-class', ['placeholder' => 'Enter your feedback message']) ?>
```

### Select Function

Generates an html select element.

Accepts name, css ID, css Class, Html Attribute array, default selection (optional), option to select by default (optional).

```
<?= select($name, $id, $class, $opt = null, $list = null, $selected = true, $idx = '') ?>
```

Basic use:

```
<?= select('colors', 'colorSelection', 'input-class', null, ['red' => 'Red', 'green' => 'Green', 'blue' => 'Blue']) ?>
```

With an option pre-selected:

```
<?= select('colors', 'colorSelection', 'input-class', null, ['red' => 'Red', 'green' => 'Green', 'blue' => 'Blue'], true, 'blue') ?>
```

With an option pre-selected and additional HTML attributes:

```
<?= select('colors', 'colorSelection', 'input-class', ['disabled' = true], ['red' => 'Red', 'green' => 'Green', 'blue' => 'Blue'], true, 'blue') ?>
```

### Buttons

Accepts type, name, css ID, css Class, text string, and an array of HTML attributes:

```
<?= button($type, $name, $id, $class, $txt, $opt = null) ?>
```

Working Example:


```
<?= button('button', 'send', 'sendMsg', 'btn', 'Disabled', ['value' => "Don't Click Me!", 'disabled' => true]) ?>
```

### Radios & Checkboxes

The input function can also be used for radio and checkbox elements:

```
<div class="form-input radios">

  <span>Marketing Options</span>

  <?= input('checkbox', 'consent', 'consent', 'consent', ['value' => 'granted']) ?>
  <?= label("Yes! Add me to the mailing list!", 'consent', 'label-class') ?>
</div>

<div class="form-input radios">

  <span>Choose Your Size:</span>

  <ul class="choices">
    <li>
      <?= input('radio', 'size', 'small', 'small', ['value' => 'Small']) ?>
      <?= label("Small", 'small', 'label-class') ?>
    </li>
    <li>
      <?= input('radio', 'size', 'medium', 'medium', ['value' => 'Medium']) ?>
      <?= label("Medium", 'medium', 'label-class') ?>
    </li>
    <li>
      <?= input('radio', 'size', 'large', 'large', ['value' => 'Large']) ?>
      <?= label("Large", 'large', 'label-class') ?>
    </li>
  </ul>
</div>

</div>
```

### Error / Success Messages

Accepts html tag, message string and css class

```
<?= formMsg($tag, $msg, $class) ?>
```

Working example:

```
<?= formMsg('span', 'Please fill in this field', 'input error') ?>
```


## Snippets

The plugin contains a few snippets to match the functions above, so you can use as is or use a starting point to make your own.

```
<?= snippet('forms/input', ['type' => 'range', 'wrapclass' => 'form-input', 'label' => 'How many?', 'name' => 'many', 'id' => 'many', 'labelclass' => 'label-class', 'inputclass' => 'input-range', 'attr' => ['min' => '1', 'max' => '20']]) ?>

<?= snippet('forms/select', ['wrapclass' => 'form-input', 'label' => 'Colors', 'name' => 'colors', 'id' => 'colors', 'labelclass' => 'label-class', 'inputclass' => 'input-text', 'attr' => [], 'list' => ['red' => 'Red', 'green' => 'Green', 'blue' => 'Blue']]) ?>

<?= snippet('forms/textarea', ['wrapclass' => 'form-input', 'label' => 'Feedback', 'name' => 'feedback', 'id' => 'feedback', 'labelclass' => 'label-class', 'inputclass' => 'input-text', 'attr' => ['placeholder' => 'Enter your name']]) ?>

<?= snippet('forms/formMsg', ['wrapclass' => 'error-box', 'tag' => 'p', 'msg' => 'Please fill out the field.', 'class' => 'error-txt']); ?>
```
