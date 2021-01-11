using System.Collections.Generic;
using System.Linq;
using MeetupApi.Entities;
using Microsoft.AspNetCore.Mvc;

namespace MeetupApi.Controllers {
    [Route("api/meetup")]
    public class MeetupController : ControllerBase{
        private MeetupContext _meetupContext;

        public MeetupController(MeetupContext meetupContext) {
            _meetupContext = meetupContext;
        }

       [HttpGet]
        public ActionResult<List<Meetup>> Get() {
            var meetups = _meetupContext.Meetups.ToList();
            return meetups;
        }
    }
}