# Projecte Hospital
Aquest projecte consisteix en el manteniment i la gestió CRUD d'un hospital.

La seva interfície gràfica presenta els diferents "dashboards" de cada taula de la base de dades del hospital.

## Bases de dades i relacions
Les **taules** de la base de dades de l'hospital és el següent:

- **`Doctors`**: metges de l'hospital amb diferents càrrecs.
- **`Specialties`**: especialitats mèdiques de cada especialista.
- **`Nurses`**: infermers.
- **`Patients`**: pacients en emergències o amb cites.
- **`Medical Histories`**: historial mèdic de cada pacient.
- **`Appointments`**: cites dels pacients amb els seus metges respectius.
- **`Emergencies`**: pacients en emergències amb els metges segons la seva especialitat.
- **`Rooms`**: habitacions disponibles o amb pacients ingressats.

### Relacions
- Doctors:
    - OneToOne: doctors - specialties
    - OneToMany: doctors - appointments
    - ManyToMany: doctors - emergencies

- Specialties:
    - OneToOne: specialties - doctors

- Nurses:
    - OneToMany: nurses - appointments
    - ManyToMany: nurses - emergencies

- Patients:
K    - OneToMany: patients - appointments
    - OneToOne: patients - emergencies
    - OneToOne: patients - medical histories
    - OneToOne: patients - rooms

- Medical Histories:
    - OneToOne: medical histories - patients

- Appointments:
    - OneToMany: appointments - doctors
    - OneToMany: appointments - nurses
    - OneToMany: appointments - patients

- Emergencies:
    - OneToMany: emergencies - doctors
    - OneToMany: emergencies - nurses
    - OneToMany: emergencies - patients

- Rooms:    
    - OneToOne: rooms - patients
