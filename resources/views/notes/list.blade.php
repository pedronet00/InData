<style>
    *{
        margin: 0;
        padding: 0;
    }
</style>
<?php $i = 1;?>
<h2 style="font-size: 35px; text-align: center; font-family: arial; color: white; background-color: #343a40; padding: 1%;">Suas anotações</h2>

    @foreach($notes as $note)
        <div class="notas" style="border-bottom: 3px solid black; width: 100%; margin-top: 5%;">
            <p style="font-size: 25px;"><b><?php echo $i. ") "; ?>{{$note->noteTitle}}</b></p>
            <br/>
            <p style="font-family: arial;">{{$note->noteText}}</p>
            <?php $i++; ?>
            <br/>
        </div>
    @endforeach
