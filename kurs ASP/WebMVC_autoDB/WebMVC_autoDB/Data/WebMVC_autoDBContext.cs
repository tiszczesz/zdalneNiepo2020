using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using WebMVC_autoDB.Models;

namespace WebMVC_autoDB.Data
{
    public class WebMVC_autoDBContext : DbContext
    {
        public WebMVC_autoDBContext (DbContextOptions<WebMVC_autoDBContext> options)
            : base(options)
        {
        }

        public DbSet<WebMVC_autoDB.Models.Film> Film { get; set; }

        public DbSet<WebMVC_autoDB.Models.Category> Category { get; set; }
    }
}
