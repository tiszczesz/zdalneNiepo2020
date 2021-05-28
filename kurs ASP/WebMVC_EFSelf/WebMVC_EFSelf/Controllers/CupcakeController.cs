using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.Extensions.Hosting;
using WebMVC_EFSelf.Data;

using WebMVC_EFSelf.Repositories;
using WebMVC_EFSelf.Models;

namespace WebMVC_EFSelf.Controllers
{
    public class CupcakeController : Controller {
        private IHostEnvironment _environment;
        private ICupcakeRepository _repository;
        public CupcakeController(IHostEnvironment environment,ICupcakeRepository repository) {
            _environment = environment;
            _repository = repository;
        }
        public IActionResult Index()
        {
            //CupcakeContext dContext = _environment.
            return View(_repository.GetCupcakes());
        }


        public IActionResult GetImage(int id) {
            Cupcake reqCupcake = _repository.GetCupcakeById(id);
        }
    }
}
