<?php

function delete_form($urlParams, $label = '削除')
{
	// $urlParamas == localhost:8000/tweets/{id}
    $form = Form::open(['method' => 'DELETE', 'url' => $urlParams]);
    // <form action="http://localhost:8000/tweets/{id}" method="delete">
    $form .= Form::submit($label, ['class' => 'btn btn-danger']);
    // <form action="http://localhost:8000/tweets/{id}" method="delete"><input type="submit" value="削除" class="btn btn-danger">
    $form .= Form::close();
    // <form action="http://localhost:8000/tweets/{id}" method="delete"><input type="submit" value="削除" class="btn btn-danger"></form>

    return $form;
}

?>