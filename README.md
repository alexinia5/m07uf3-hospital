# M07-UF3-Projecte Laravel

El projecte consistira en crear una pàgina web de gestió d'un hospital amb Laravel.

- Gestió de les dades dels treballadors: doctors i infermers.
- Gestió de les dades dels pacients.
- Gestió de les urgències.
- Gestió de les cites.
- Gestió dels caps de departaments d'especialitats.
- Gestió dels historials clínics dels pacients.
- Gestió de les habitacions amb pacients o sense.

## Base de dades

- ### Taules :
    - Doctors
    - Nurses
    - Patients
    - Emergencies
    - Appointments
    - Specialties
    - Medical History
    - Rooms

- ### Relacions :
    - #### Doctors :
        - **ManyToMany**: doctors - patients
        - **ManyToMany**: doctors - specialties
        - **ManyToMany**: doctors - emergencies
        - **OneToMany**: doctors - specialties 
        (definir el cap metge de departament)
        - **OneToMany**: doctors - appointments

    - #### Nurses :
        - **ManyToMany**: nurses - emergencies
        - **OneToMany**: nurses - appointments

    - #### Patients :
        - **ManyToMany**: patients - doctors
        - **OneToMany**: patients - emergencies
        - **OneToMany**: patients - appointments
        - **OneToOne**: patients - medical histories
        - **OneToOne**: patients - rooms
    
    - #### Emergencies :
        - **ManyToMany**: emergencies - doctors
        - **ManyToMany**: emergencies - nurses
        - **OneToMany**: emergencies - patients

    - #### Appointments :
        - **OneToMany**: appointments - doctors
        - **OneToMany**: appointments - nurses
        - **OneToMany**: appointments - patients
    
    - #### Specialties :
        - **ManyToMany**: specialties - doctors
        - **OneToMany**: specialties - doctors

    - #### Medical History :
        - **OneToOne**: medical histories - patients

    - #### Rooms :
        - **OneToOne**: rooms - patients
