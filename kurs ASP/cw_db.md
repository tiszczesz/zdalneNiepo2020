# Generowanie bazy z modelu
1. Utwórz projekt asp.core MVC
2. W katalogu Models dodaj dwie klasy np Student i Course
```cs
class Student{
    public int Id{get;set;}
    public string FirstName{get;set;};
    public string LastName{get;set;};

    public Course MyCourse{get;set;};
    public int MyCourseId{get;set;};
}
 class{
     public int Id{get;set;}
     public string Name{get;set;};
     public string Author{get;set;};
     public virtual List<Student> Students { get; set; }
 }
 ```
 3. Dodać kolejno kontroler z EntityFramework StudentController oraz CourseController z generacją AppDbContext
 4. ```Nugat console Add-Migration 'first'```
 5. ```Nugat console Update-Database ```
