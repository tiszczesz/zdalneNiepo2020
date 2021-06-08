using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using WebMVC_DB2_sp.Models;

namespace WebMVC_DB2_sp.Data
{
    public class AppDbContext : DbContext
    {
        public AppDbContext(DbContextOptions<AppDbContext> options):base(options) {
        }

        public DbSet<Animal> Animals { get; set; }

        protected override void OnModelCreating(ModelBuilder modelBuilder) {
            base.OnModelCreating(modelBuilder);
            modelBuilder.Entity<Animal>().HasData(
                new Animal {
                    Id = 1,
                    Name = "Pikuś",
                    Description = "Mały biały piesek bez łat",
                    Weight = 2000
                },
                new Animal
                {
                    Id = 2,
                    Name = "Rybka",
                    Description = "Coś na ząbek",
                    Weight = 20
                },
                new Animal
                {
                    Id = 3,
                    Name = "Kanarek",
                    Description = "Mały żółty ptaszek śpiewający",
                    Weight = 100
                },
                new Animal
                {
                    Id = 4,
                    Name = "Mruczek",
                    Description = "Mały czarny kotek bez łat",
                    Weight = 1000
                },
                new Animal
                {
                    Id = 5,
                    Name = "Bonifacy",
                    Description = "Duży biały kotek bez łat",
                    Weight = 2000
                }

                );
        }
    }
}
