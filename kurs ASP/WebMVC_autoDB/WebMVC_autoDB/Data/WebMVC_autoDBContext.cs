using Microsoft.EntityFrameworkCore;
using WebMVC_autoDB.Models;

namespace WebMVC_autoDB.Data {
    public class WebMVC_autoDBContext : DbContext {
        public WebMVC_autoDBContext(DbContextOptions<WebMVC_autoDBContext> options)
            : base(options) {
        }

        public DbSet<Film> Film { get; set; }

        public DbSet<Category> Category { get; set; }

        protected override void OnModelCreating(ModelBuilder modelBuilder) {
            base.OnModelCreating(modelBuilder);
            modelBuilder.Entity<Category>().HasData(
                new Category {
                    Id = 1,
                    Name = "Wojenny",
                    Description = "Ciekawe fimy o wojnie"
                },
                new Category {
                    Id = 2,
                    Name = "Komedia",
                    Description = "Śmiechu warte"
                },
                new Category {
                    Id = 3,
                    Name = "Obyczajowy",
                    Description = "Wyciskacz łez i..."
                }
            );
            modelBuilder.Entity<Film>().HasData(
                new Film {
                    Id = 1,
                    Title = "O jeden most za daleko",
                    Duration = 120,
                    CategoryId = 1
                },
                new Film {
                    Id = 2,
                    Title = "Ren",
                    Duration = 160,
                    CategoryId = 1
                },
                new Film {
                    Id = 3,
                    Title = "Roman",
                    Duration = 90,
                    CategoryId = 2
                },
                new Film {
                    Id = 4,
                    Title = "Shrek",
                    Duration = 110,
                    CategoryId = 2
                }
            );
        }
    }
}