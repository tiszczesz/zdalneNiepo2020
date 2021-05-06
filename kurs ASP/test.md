# Początek

## Historia asp
1. strony asp     (.asp)
2. WebForms i asp.net (.aspx)
3. mvc asp.net versja 1 do 6
4. asp.net core 1 do 3.1
5. .Net 5.0
   

https://docs.microsoft.com/pl-pl/aspnet/core/introduction-to-aspnet-core?view=aspnetcore-5.0

Narzędzie pracy  `dotnet`

https://dotnet.microsoft.com/apps/aspnet    

```console
dotnet --version
dotnet -h  dotnet --help
dotnet --info
dotnet new --list
```


## Narzędzia pracy z kodem
1. Visual studio 2019  https://visualstudio.microsoft.com/pl/vs/
2. Rider JetBrains https://www.jetbrains.com/rider/
3. Visual studio code https://code.visualstudio.com/
4. Narzędzie Azure Data Studio https://docs.microsoft.com/pl-pl/sql/azure-data-studio/what-is-azure-data-studio?view=sql-server-ver15
   
   ## StartUp

   ### Aplikacja Razor Pages

   ```console
    dotnet new webapp -o MyApp

   ```

   ### metoda klasy StartUp

   ```cs
    public void ConfigureServices(IServiceCollection services)
            {
                services.AddRazorPages();
            }
   ```

   ```cs
    public void Configure(IApplicationBuilder app, IWebHostEnvironment env)
        {
            if (env.IsDevelopment())
            {
                app.UseDeveloperExceptionPage();
                app.UseSwagger();
                app.UseSwaggerUI(c => c.SwaggerEndpoint("/swagger/v1/swagger.json", "KursWebAPI_1 v1"));
            }

            app.UseRouting();

            app.UseAuthorization();

            app.UseEndpoints(endpoints =>
            {
                endpoints.MapControllers();
            });
   ```

   ### Cwiczenie 1
   ```cs
    public static List<Book> GetBooks() {
            List<Book> books = new List<Book> {
                new Book(){Id = 1,Title = "ABC c#",Author = "Jan Kowalski",Price = 34.78M},
                new Book(){Id = 2,Title = "Mrówki",Author = "Jan Nowak",Price = 55.89M},
                new Book(){Id = 3,Title = "ABC c#",Author = "Maria Molicka",Price = 34.78M},
                new Book(){Id = 4,Title = "Książka kucharska",Author = "Irena Santor",Price = 45.90M},
                new Book(){Id = 5,Title = "Kraków nocą",Author = "Mateusz Jon",Price = 34.78M},
                new Book(){Id = 6,Title = "Góry Polskie",Author = "Adam Tryk",Price = 44.78M},
                new Book(){Id = 7,Title = "444-44",Author = "Jan Kowalski",Price = 22.78M},
            };
            return books;
        }
   ```

   ### przerwane PipeLine

   ```cs 
   app.Run(content=>content.Response.WriteAsync("Hello from !!!!"));

    app.UseEndpoints(endpoints =>
    {
        endpoints.MapRazorPages();
    });
    ```
    
 ### Przykład użycia:


```cs
app.Run(content=> content.Response
  .WriteAsync("<a href='http://onet.pl'>onet</a> <script>window.location.href=\"http://onet.pl\";</script>"));
```

## Aplikacje MVC

```console
dotnet new mvc -o MyApp
```

### Metody klasy StartUp

```cs
 public void ConfigureServices(IServiceCollection services)
        {
            services.AddControllersWithViews();
        }
```

```cs
    public void Configure(IApplicationBuilder app, IWebHostEnvironment env)
        {
            if (env.IsDevelopment())
            {
                app.UseDeveloperExceptionPage();
            }
            else
            {
                app.UseExceptionHandler("/Home/Error");
            }
            app.UseStaticFiles();

            app.UseRouting();

            app.UseAuthorization();

            app.UseEndpoints(endpoints =>
            {
                endpoints.MapControllerRoute(
                    name: "default",
                    pattern: "{controller=Home}/{action=Index}/{id?}");
            });
        }

```

## DownGit
https://minhaskamal.github.io/DownGit/#/home

