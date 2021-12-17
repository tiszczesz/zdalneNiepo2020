interface ChildProps {
    dateNow: Date;
}


export const Child2 = ({dateNow}:ChildProps) => {
    return <div>
        Witam z komponentu dziecka w dniu: {dateNow.toLocaleDateString()} <br />
        Czas: {dateNow.toLocaleTimeString()}
    </div>
}