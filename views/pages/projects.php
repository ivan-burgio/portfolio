<main class="main proyects">
    <?php proyects_template(
        'https://github.com/ivan-burgio/proyecto-control-gastos-vite',
        '/build/img/proyecto1.png',
        'This project is a site to keep track of your expenses, you can enter an initial amount and then add different expenses that you have to be able to keep precise control of your money.
        Like all projects, it has field validation.
        You can also edit and delete some expenses and the budget value is updated in real time along with the graph.
        Personally, I consider it very useful to the point that I am going to use it in my daily life.'
    ); ?>

    <?php proyects_template(
        'https://github.com/ivan-burgio/proyecto-administrador-pacientes-vite',
        '/build/img/proyecto2.png',
        'This project is a simulation of a patient manager in a veterinary clinic.
        What makes this project special is that it has: <br>
        ✅Field validation to ensure that the information entered is correct.
        ✅Data persistence in localstorage to maintain a record of patients.
        ✅Patient editing and deletion functionality, making it a truly useful tool for patient management in a clinic.
        To build this project, I used Vite for the initial files, React for creating the interface, and TailwindCSS to give it a nice look. I also implemented Hooks like useEffect and useState, which are essential in developing React applications.'
    ); ?>

    <?php proyects_template(
        'https://github.com/ivan-burgio/proyecto-devwebcamp-mvc',
        '/build/img/proyecto3.png',
        'This site is a website to organize events.
        It has sections for account creation, login and recovery.
        It also has the creation of events, and speakers; You can view registered users with their lesson plan among other things in the administration section.
        It has alert systems to notify the user if data is missing or entered incorrectly and the security of the site includes URL protection, password hashing as shown in the video, sanitization of data to be entered, among other things.'
    ); ?>
</main>