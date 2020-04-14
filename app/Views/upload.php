
<?php 
$title = ['name'          => 'title',
        'id'            => 'text1',
        'placeholder'         => 'ura',
        'maxlength'     => '100',
        'size'          => '30',
       ];
$poza = ['name'          => 'poza',
        'id'            => 'poza',
        'type'         => 'file',
       ];
helper('form');
echo form_open_multipart('ImageController/save'); ?>
    <table class="table">
        <tr>
            <td>Titlu</td>
            <td><?php echo form_input($title);?></td>
        </tr>
        <tr>
            <td>Imagine</td>
            <td><?php echo form_upload($poza);?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('submit','Save','class="btn btn-primary"')?></td>
        </tr>
    </table>
</body>
</html>