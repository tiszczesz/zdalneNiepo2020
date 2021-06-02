using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using WebMVC_DB2_sp.Data;
using WebMVC_DB2_sp.Models;

namespace WebMVC_DB2_sp.Controllers
{
    public class AnimalController : Controller {
        private AppDbContext _db;

        public AnimalController(AppDbContext db) {
            _db = db;
        }
        public IActionResult Index() {
            List<Animal> animals = _db.Animals.ToList();
            return View(animals);
        }
    }
}
