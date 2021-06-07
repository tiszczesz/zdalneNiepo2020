using Microsoft.EntityFrameworkCore;
using WebMVC_selfDB.Models;

namespace WebMVC_selfDB.Data {
    public class ProductDbContext : DbContext {
        public ProductDbContext(DbContextOptions<ProductDbContext> options)
            : base(options) {
        }

        public DbSet<Product> Products { get; set; }

        protected override void OnModelCreating(ModelBuilder modelBuilder) {
            base.OnModelCreating(modelBuilder);
            modelBuilder.Entity<Product>().HasData(
                new Product {
                    Id = 1,
                    Name = "chleb",
                    Price = 2.99M,
                    Description = "Chrupiący chlebek na śniadanko"
                },
                new Product {
                    Id = 2,
                    Name = "bułka",
                    Price = 0.99M,
                    Description = "Chrupiący bułka na śniadanko"
                },
                new Product {
                    Id = 3,
                    Name = "masło",
                    Price = 4.99M,
                    Description = "Świeże masło prawdziwe"
                },
                new Product {
                    Id = 4,
                    Name = "śmietana 18%",
                    Price = 5.66M,
                    Description = "Kubek śmietany pożywnej"
                }
            );
        }
    }
}