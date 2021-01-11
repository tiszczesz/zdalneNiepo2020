using System;
using System.Collections.Generic;
using System.Linq;
using MeetupApi.Entities;

namespace MeetupApi {
    public class MeetupSeeder {
        private MeetupContext _meetupContext;

        public MeetupSeeder(MeetupContext meetupContext) {
            _meetupContext = meetupContext;
        }

        public void Seed() {
            if (_meetupContext.Database.CanConnect()) {
                if (!_meetupContext.Meetups.Any()) {
                    InsertSampleData();
                }
            }
        }

        private void InsertSampleData() {
            var meetups = new List<Meetup> {
                 new Meetup
                {
                    Name = "Web summit",
                    Date = DateTime.Now.AddDays(7),
                    IsPrivate = false,
                    Organizer = "Microsoft",
                    Location = new Location
                    {
                        City = "Krakow",
                        Street = "Szeroka 33/5",
                        PostCode = "31-337"
                    },
                    Lectures = new List<Lecture>
                    {
                        new Lecture
                        {
                            Author = "Bob Clark",
                            Topic = "Modern browsers",
                            Description = "Deep dive into V8"
                        }
                    }
                },
                new Meetup
                {
                    Name = "4Devs",
                    Date = DateTime.Now.AddDays(7),
                    IsPrivate = false,
                    Organizer = "KGD",
                    Location = new Location
                    {
                        City = "Warszawa",
                        Street = "Chmielna 33/5",
                        PostCode = "00-007"
                    },
                    Lectures = new List<Lecture>
                    {
                        new Lecture
                        {
                            Author = "Will Smith",
                            Topic = "React.js",
                            Description = "Redux introduction"
                        },
                        new Lecture
                        {
                            Author = "John Cena",
                            Topic = "Angular store",
                            Description = "Ngxs in practice"
                        }
                    }
                },
            };
            _meetupContext.AddRange(meetups);
            _meetupContext.SaveChanges();
    
        }
    }
}