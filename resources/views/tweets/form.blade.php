<div class="form-group">
    <label for="title">タイトル</label>
    <input type="text" class="form-control" name="title">
</div>
<div class="form-group">
    <label for="content">内容</label>
    <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
</div>
<div class="form-group">
    <label for="published_at">作成日</label>
    <input type="date" name="published_at" class="form-control" value="{{ $published_at }}">
</div>
<div class="form-group">
    <input type="submit" value="{{ $submitButton }}" class="btn btn-primary form-control">
</div>