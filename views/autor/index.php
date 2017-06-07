<p>Here is a list of all autor:</p>

<?php foreach($autor as $autorsingle) { ?>
  <p>
    <?php echo $autorsingle->id." ".$autorsingle->naziv_autora ?>
    <a href='?controller=autor&action=deleteautor&id=<?php echo $autorsingle->id; ?>'>BRISI AUTORA</a>
  </p>
<?php } ?>