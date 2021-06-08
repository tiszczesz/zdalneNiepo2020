using System;
using Microsoft.EntityFrameworkCore;
using WebMVC_G_DBGen.Models;

namespace WebMVC_G_DBGen.Data {
    public class UserContext : DbContext {
        public UserContext(DbContextOptions<UserContext> options)
            : base(options) {
        }

        public DbSet<User> User { get; set; }

        protected override void OnModelCreating(ModelBuilder modelBuilder) {
            base.OnModelCreating(modelBuilder);
            modelBuilder.Entity<User>().HasData(
                new User {
                    Id = 1,
                    UserName = "User1",
                    Email = "user1@example.com",
                    RegDate = DateTime.Now
                },
                new User {
                    Id = 2,
                    UserName = "User2",
                    Email = "user2@example.com",
                    RegDate = DateTime.Now
                },
                new User {
                    Id = 3,
                    UserName = "User3",
                    Email = "user3@example.com",
                    
                },
                new User {
                    Id = 4,
                    UserName = "User4",
                    Email = "user4@example.com",
                    
                }
            );
        }
    }
}