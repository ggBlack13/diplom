<form action="vendor/add_post.php" method="POST" enctype="multipart/form-data">


      <div class="custom-file form-group">        
        <input type="file" name ="file" class="custom-file-input">
        <label class="custom-file-label">Выберите изображение</label>
        <div class="invalid-feedback">Сообщение об ошибке</div>
      </div>
      <div class="custom-file form-group">        
        <input type="file" name ="file1" class="custom-file-input">
        <label class="custom-file-label">Выберите изображение</label>
        <div class="invalid-feedback">Сообщение об ошибке</div>
      </div>
      <div class="mt-3 form-group">
        <input type="text" name="name" class="form-control" cols="30" rows="3" placeholder="Введите название"></input>
        <div class="invalid-feedback">Сообщение об ошибке</div>
      </div>
      <div class="mt-3 form-group">
        <textarea type="text" name="description" class="form-control" cols="30" rows="3" placeholder="Введите текст"></textarea>
        <div class="invalid-feedback">Сообщение об ошибке</div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Создать</button>
    </form>
