<title><?php echo $title; ?></title>

<ul>
    <?php foreach($users as $user) { ?>
        <li><?php echo $item['email']; ?></li>
        <li><?php echo $item['username']; ?></li>
    <?php } ?>
</ul>