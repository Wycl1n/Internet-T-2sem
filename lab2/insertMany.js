db.task.insertMany([
    {title: 'Задача №1', description: "Выполенение задачи №1", worker: ['Воронов Цезарь', 'Шумейко Тит'],  project: 'Проект №1', manager: 'Легойда Яромир', timeStart: 1652472000, timeEnd: 1652518800},
    {title: 'Задача №2', description: "Выполенение задачи №2", worker: 'Андрейко Тарас', project: 'Проект №1', manager:'Легойда Яромир', timeStart:1652605200, timeEnd: 1652608800},
    {title: 'Задача №3', description: "Выполенение задачи №3", worker: ['Деменьтьев Игорь', "Миклашевский Зиновий"], project: 'Проект №1', manager: 'Легойда Яромир', timeStart:1652709600, timeEnd: 1652731200},
    {title: 'Задача №1', description: "Выполенение задачи №1", worker: 'Захарченко Эрик', project: 'Проект №2', manager: 'Родионов Добрыня', timeStart:1652176800, timeEnd: 1652216400},
    {title: 'Задача №2', description: "Выполенение задачи №2", worker: 'Потапов Устин', project: 'Проект №2', manager:'Родионов Добрыня', timeStart:1652302800, timeEnd: 1652347800},
    {title: 'Задача №1', description: "Выполенение задачи №1", worker: 'Худобяк Жигер', project: 'Проект №3', manager:'Петровский Жигер', timeStart:1652347800, timeEnd: 1652355000},
    {title: 'Задача №2', description: "Выполенение задачи №2", worker: 'Яковенко Юрий', project: 'Проект №3', manager:'Петровский Жигер', timeStart:1652441400, timeEnd: 1652455800},
    {title: 'Задача №1', description: "Выполенение задачи №1", worker: ['Воронов Михаил'],  project: 'Проект №4', manager: 'Легойда Яромир', timeStart: 1652472000, timeEnd: 1652518800}
])
//Название задачи, описание, работник, проект, руководитель, время начала, время конца 
