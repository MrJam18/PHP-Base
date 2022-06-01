<?php
declare(strict_types=1);
require_once './utils/Header.php';
require_once './providers/TaskProvider.php';
require_once './models/UserProvider.php';


class TaskController extends Controller
{
    protected array $headers = [];
    protected ?array $tasks = null;
    private TaskProvider $provider;
    protected ?string $error;

    public function __construct()
    {
        $this->provider = new TaskProvider();

    }

    function index(){
        $this->headers = [new Header('дата созадния', 'dateCreated'), new Header('Описание', 'description'), new Header('ож. дата выполнения', 'desiredDateDone'), new Header('приоритет', "priority"), new Header('имя пользователя', 'username'), new Header('дата обновления', 'dateUpdated') ];
        $this->tasks = $this->provider->getUndoneList();
        $this->generate('tasks');
    }
    function addTask(){
        $this->index();
        $this->view->addHTML('newTask');
        $this->view->addJS('index');
    }
    function submitAddTask(){
        $data = $_POST;
        $userProvider = new UserProvider();
        $user = $userProvider->getUser($data['user']);
        if(!$user)
        {
            $this->error = 'Данного пользователя не существует!';
            return $this->addTask();
        }
        $desiredDateDone = new DateTime($data['desiredDateDone']);
        if($desiredDateDone < new DateTime()){
            $this->error = 'Дата выполнения должна быть позднее текущей даты!';
            return $this->addTask();
        }
        $priority = (int) $data['priority'];
        $this->provider->addTask($data['description'], $priority, $user, $desiredDateDone);
        $this->locate('task');
    }
    function doTaskDone(){
       $tasks =  $this->provider->getUndoneList();
       $tasks[$_GET['key']]->markAsDone();
       $this->provider->writeTasks($tasks);
       $this->locate('task');
    }

}