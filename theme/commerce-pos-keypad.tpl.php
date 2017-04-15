<?php

/**
 * @file
 * Template for the Commerce POS keypad input.
 *
 * Available variables:
 *   $element - The render array for the keypad's form element.
 */
?>

<?php if (!empty($element['amount'])) { ?>
  <div class="commerce-pos-keypad">
    <div class="commerce-pos-keypad-top">
      <div class="commerce-pos-keypad-quick-pay">
        <?php if (!empty($element['quick_pay'])): ?>
          <label>Quick Pay</label>
          <?php print render($element['quick_pay']); ?>
        <?php endif; ?>
      </div>
      <div class="commerce-pos-keypad-title"></div>
      <div class="commerce-pos-keypad-close"></div>
      <div class="commerce-pos-keypad-amount">
        <?php print render($element['amount']); ?>
      </div>
    </div>
    <div class="commerce-pos-keypad-keys">
      <div class="commerce-pos-keypad-numbers">
        <div class="commerce-pos-keypad-key" data-keybind="7">7</div>
        <div class="commerce-pos-keypad-key" data-keybind="8">8</div>
        <div class="commerce-pos-keypad-key" data-keybind="9">9</div>
        <div class="commerce-pos-keypad-key" data-keybind="4">4</div>
        <div class="commerce-pos-keypad-key" data-keybind="5">5</div>
        <div class="commerce-pos-keypad-key" data-keybind="6">6</div>
        <div class="commerce-pos-keypad-key" data-keybind="1">1</div>
        <div class="commerce-pos-keypad-key" data-keybind="2">2</div>
        <div class="commerce-pos-keypad-key" data-keybind="3">3</div>
        <div class="commerce-pos-keypad-key" data-keybind="0">0</div>
        <div class="commerce-pos-keypad-key" data-keybind="00">00</div>
        <div class="commerce-pos-keypad-key" data-keybind="000">000</div>
        <div class="commerce-pos-keypad-key" data-keybind=".">.</div>
      </div>

      <div class="commerce-pos-keypad-actions">
        <div class="commerce-pos-keypad-key" data-keybind="">&lt;</div>
        <div class="commerce-pos-keypad-key clear-key" data-keybind="Clear">C</div>
        <?php print render($element['add']); ?>
      </div>
    </div>
    <?php print drupal_render_children($element); ?>
  </div>
<?php } ?>
