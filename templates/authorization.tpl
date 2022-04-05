<!-- Modal -->
<form action="/" method="post">
<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="authModalLabel">Authorization</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <div class="modal-body">
          <div class="md-3">
            <label for="user-name" class="col-form-label">Пользователь</label>
            <input type="text" class="form-control" id="user-name" name="login">
          </div>
           <div class="md-3">
            <label for="user-pass" class="col-form-label">Пароль</label>
            <input type="password" class="form-control" id="user-pass" name="pass">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Войти</button>
      </div>
    </div>
  </div>
</div>
</form>