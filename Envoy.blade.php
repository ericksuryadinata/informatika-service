@servers(['web' => 'gitlab@68.183.178.18'])
@setup
    $repository = 'git@gitlab.com:ericksuryadinata/informatika-service.git';
    $releases_dir = '/var/www/informatika-service/releases';
    $app_dir = '/var/www/informatika-service';
    $release = date('dmYHis');
    $new_release_dir = $releases_dir .'/'. $release;
@endsetup
@story('deploy')
    clone_repository
    run_composer
    update_symlinks
@endstory
@task('clone_repository')
    echo 'Cloning repository'
    [ -d {{ $releases_dir }} ] || mkdir {{ $releases_dir }}
    git clone --depth 1 {{ $repository }} {{ $new_release_dir }}
    echo 'Done'
@endtask
@task('run_composer')
    echo "Starting deployment ({{ $release }})"
    cd {{ $new_release_dir }}
    composer install --prefer-dist --no-scripts -q -o
    echo 'Done'
@endtask
@task('update_symlinks')
    echo "Linking storage directory"
    rm -rf {{ $new_release_dir }}/storage
    ln -nfs {{ $app_dir }}/storage {{ $new_release_dir }}/storage
    echo 'Done'
    echo 'Linking .env file'
    ln -nfs {{ $app_dir }}/.env {{ $new_release_dir }}/.env
    echo 'Done'
    echo 'Linking current release'
    ln -nfs {{ $new_release_dir }} {{ $app_dir }}/current
    echo Changing bootstrap permissions""
    cd $new_release_dir
    chmod 777 -R bootstrap/cache
    echo 'Done'
@endta

