<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">INSCRIRE UN MEMBRE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <form action="{{url('ajouter_utilisateur')}}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <label for="courriel"> Courriel </label>
                            {!! $errors->first('courriel', '<small class="text-danger">:message</small>')!!}

                            <input class="form-control" type="email" name="courriel" id="courriel"   value="{{old('courriel')}}">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <label for="nom"> Nom </label>
                            {!!$errors->first('nom', '<small class="text-danger">:message</small>')!!}

                            <input class="form-control" type="text" name="nom" id="nom"  placeholder="" value="{{old('nom')}}">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <label for="prenom"> Prenom </label>
                            {!!$errors->first('prenom', '<small class="text-danger">:message</small>')!!}

                            <input class="form-control" type="text" name="prenom" id="prenom"  placeholder="" value="{{old('prenom')}}">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <label for="code_postal"> Code postal </label>
                            {!!$errors->first('code_postal', '<small class="text-danger">:message</small>')!!}

                            <input class="form-control" type="text" name="code_postal" id="code_postal"  placeholder="" value="{{old('code_postal')}}">
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <label for="mdp"> Mot de passe </label>
                            {!!$errors->first('mdp', '<small class="text-danger">:message</small>')!!}

                            <input class="form-control"type="password" name="mdp" id="mdp"  placeholder="" value="{{old('mdp')}}">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <label for="telephone"> Telephone </label>
                            {!! $errors->first('telephone', '<small class="text-danger">:message</small>')!!}

                            <input class="form-control" type="text" name="telephone" id="telephone"   value="{{old('telephone')}}">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <label for="role"> Roles </label>
                            {!!$errors->first('role', '<small class="text-danger">:message</small>') !!}
                            <select class="form-control" name="role" id="role" value="{{old('role')}}">
                                @foreach($lesRoles as $unRole)
                                <option value="{{$unRole->id}}">{{$unRole->role}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <label for="direction"> Directions </label>
                            <select name="direction" id="direction" class="form-control" value="{{old('direction')}}">
                                @foreach($lesDirections as $uneDirection)
                                    <option value="{{$uneDirection->id}}">{{$uneDirection->direction}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">QITTER</button>
                    <button type="submit" class="btn btn-primary">INSCRIRE</button>
                </div>
            </form>


        </div>
    </div>
</div>
